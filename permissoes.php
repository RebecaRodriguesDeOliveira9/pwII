<?php include "cabecalho.php"; ?>

<?php
session_start();
include('conexao.php');

// Verifica se o usuário é ADMIN
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php"); // Redireciona se não for admin
    exit();
}

// Função para adicionar uma permissão
if (isset($_POST['add'])) {
    $descricao = $_POST['descricao'];
    $role = $_POST['role'];

    $sql = "INSERT INTO PERMISSOES (DESCRICAO, ROLE) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$descricao, $role]);
    header("Location: permissoes.php");
}

// Exibir todas as permissões
$sql = "SELECT * FROM PERMISSOES";
$stmt = $conn->query($sql);
$permissoes = $stmt->fetchAll();
?>

<h1>Gerenciar Permissões</h1>
<a href="permissoes.php?add=true">Adicionar Permissão</a>

<table>
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Role</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($permissoes as $permissao): ?>
    <tr>
        <td><?php echo $permissao['ID']; ?></td>
        <td><?php echo $permissao['DESCRICAO']; ?></td>
        <td><?php echo $permissao['ROLE']; ?></td>
        <td>
            <a href="permissoes.php?edit=<?php echo $permissao['ID']; ?>">Editar</a>
            <a href="permissoes.php?delete=<?php echo $permissao['ID']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php if (isset($_GET['add']) || isset($_GET['edit'])): ?>
    <h2><?php echo isset($_GET['edit']) ? 'Editar Permissão' : 'Adicionar Perm


<?php include "rodape.php"; ?>