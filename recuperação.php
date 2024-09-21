<?php include "cabecalho.php"; ?>
<?php

echo "<h2> 1-Variáveis e Tipos de Dados </h2>";

echo $nome = "Rebeca";
echo "<br>";
echo $idade = "17";
echo "<br>";
echo "Meu nome é " . $nome . " e minha idade é  " . $idade . " anos.";
?>

<?php

echo "<h2> 2- Estruturas de Controle </h2>";

/*echo $numero = $Ale;
echo rand (54 , 185) = $Ale;*/

$numero = rand (54 , 185);

if($numero % 2 == 0){
echo "Par " . $numero;
}else{
echo "Impar " . $numero;
}

?>
<?php

echo "<h2> 3-Laços de Repetição </h2>";

for($numero = 584; $numero <= 1970; $numero++){

    echo "  Numero: " . $numero;

    if($numero % 2 == 0){

        echo "<p> O número é par! </p>";
    }else{
        echo "<p> Não é par! </p>";
    }
}

?>

<?php

echo "<h2> 4-Arrays </h2>";

$frutas = array("Banana", "Kiwi","Carambola","Maçã", "Manga");

echo " Frutas: ";

foreach ($frutas as $fruta){
     
    echo $fruta . "<br>";
}

$clientes = array("cep" => "12345-678", "nome" => "Pedro Santos",
    "telefone" => "1111-2222",
    "cep" => "34567-890", "nome" => "Maria Oliveira",
    "telefone" => "9876-5432",
    "cep" => "23456-789", "nome" => "Ana Costa",
    "telefone" => "3333-4444",
    "cep" => "45678-901", "nome" => "Peny",
    "telefone" => "5269-8844",
    "cep" => "90648-131");

 
echo " <p></p> ";

echo "<h4> Clientes: </h4>";

echo " <p></p> ";

foreach ($clientes as $cliente) {

    echo "Nome: " . $clientes["nome"] . "<br>";
    echo "Telefone: " . $clientes["telefone"] . "<br>";
    echo "CEP: " . $clientes["cep"] . "<br><br>";

}
?>


<?php include "rodape.php"; ?>