<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <h1>Estrutura Condicional (IF ELSE)</h1>

    <div class="container">

<p>$inteira = 10</p>
<p>$nome = "Prof"</p>
<p>$Valor = 10.50 </p>
<p>$ativo = true </p>


<p> if($inteira == 10)
    {
        echo "o conteudo é 10";
        }
        else if($inteira >=11)
        {
            echo "maior ou igual a 11";
        }
        else
        {
            echo "não é 10";
        }

        <p>
            <pre>
                if( cout($nome) > 10)
    {
        echo "seu nome tem mais que 10 caracteres";
    }
</pre>
<?php
$inteira = 9;
if($inteira == 10)
{
    echo "<h2>A variavel é 10</h2>";
}
else if($inteira >=11){
echo "<h2>A variavel é maior ou igual a 11</h2>";
}
else
{
    echo "<h2>A variavel só pode ser menor que 10</h2>";
}
?>


<p>
    As variaveis strig podem ser contados os caracteres e usados no if
</p>
<pre>
    if( strlen($nome) > 10 )
    {
        echo "seu nome tem mais que 10 caracteres quntidade é ".strlen($nome);
    }
    </pre>
    <?php
    $nome = "Rebeca";~
    if( strlen($nome) > 5 )
    {
        echo "<h2>seu nome tem mais que 10 caracteres quntidade é".strlen($nome)."</h2>"
    }
    ?>


<p>
    podemos verificar se a variavel $nome está vazia
</p>
<pre>
    if( empty($nome) )
    {
        echo "sua variavel está vazia";
    }
</pre>
<p>
    Também podemos comparar string normalmente
</p>
<pre>
    if($nome == "Rebeca")
    {
        echo "Nome igual";
    }
    else
    {
        echo "Nomes diferentes";
    }
   </div>

    <script stc="bootstrap.bundle.min.js"></script>
</body>
</html>