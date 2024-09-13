<?php include"cabecalho.php"; ?>
    <h1>Laço de repetição while</h1>
    <p> O Laço de repetição while necessita de 3 itens para se tornar um loop: </p>
    <ol>
<li>variavel controladora</li>
<li>condição de continuação</li>
<li>incremento de variavel controladora</li>
    </ol>
    <pre>
        $i = 0; //declaração a variavel controladora
        while( $ < 10 )
        {
            //incrementando a variavel de controle
            $i = $i;
        }
    </pre>
    <p>a derivação do while obrigatoriamente executa uma vez no minimo o bloco de código </p>
    <pre>
        $i = 0;
        do{
            $i++;
        }while($i < 10);
    </pre>
    exemplo:
    <?php
    $i = 1;
    while($i < 20)
    {
        echo "<h1> $i h1 </h1>";
        $i++;
    }
    ?>
    <p>outra forma de implementar é:</p>
    <?php
    $i = 1;
    do{
        ?>
        <h2>HTML NORMAL</h2>
        <p><?php echo $i ; ?> </p>
        <?php
        $i++;
    }While($i < 5);
    ?>


<?php include "rodape.php"; ?>
        
