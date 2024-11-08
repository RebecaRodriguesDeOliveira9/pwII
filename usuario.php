<?php include "cabecalho.php"; ?>

<?php
session_start();
include('conexao.php');

// Verifica se o usuário é ADMIN
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php"); // Redireciona se não for admin
    exit();
}

// Função para adicionar um usuário
if (isset($_POST['add'])) {
    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql = "INSERT INTO USUARIOS (LOGIN, SENHA, ATIVO) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$login, $senha, $ativo]);
    header("Location: usuarios.php");
}

// Função para editar um usuário
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM USUARIOS WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $usuario = $stmt->fetch();
}

// Função para atualizar um usuário
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql = "UPDATE USUARIOS SET LOGIN = ?, SENHA = ?, ATIVO = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$login, $senha, $ativo, $id]);
    header("Location: usuarios.php");
}

// Função para excluir um usuário
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM USUARIOS WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    header("Location: usuarios.php");
}

// Exibir todos os usuários
$sql = "SELECT * FROM USUARIOS";
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll();
?>

<!-- Exibição de Usuários e Formulário de Cadastro/Atualização -->
<h1>Gerenciar Usuários</h1>
<a href="usuarios.php?add=true">Adicionar Usuário</a>

<table>
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Ativo</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['ID']; ?></td>
        <td><?php echo $usuario['LOGIN']; ?></td>
        <td><?php echo $usuario['ATIVO'] ? 'Sim' : 'Não'; ?></td>
        <td>
            <a href="usuarios.php?edit=<?php echo $usuario['ID']; ?>">Editar</a>
            <a href="usuarios.php?delete=<?php echo $usuario['ID']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Formulário para adicionar ou editar -->
<?php if (isset($_GET['edit']) || isset($_GET['add'])): ?>
    <h2><?php echo isset($_GET['edit']) ? 'Editar Usuário' : 'Adicionar Usuário'; ?></h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['ID'] ?? ''; ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" value="<?php echo $usuario['LOGIN'] ?? ''; ?>" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <label for="ativo">Ativo:</label>
        <input type="checkbox" name="ativo" <?php echo isset($usuario['ATIVO']) && $usuario['ATIVO'] == 1 ? 'checked' : ''; ?>>
        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'update' : 'add'; ?>">Salvar</button>
    </form>
<?php endif; ?>


<?php include "rodape.php"; ?>