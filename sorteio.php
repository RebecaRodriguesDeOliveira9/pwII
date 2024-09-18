<?php include "cabecalho.php"; ?>

//<?php
$Aleatorio = array("JONAS SILVA JATOBA", "    
MARCOS VINÍCIUS SANCHES CARDOSO", "MARIANA DOS SANTOS", "MATHEUS MARQUEZIM GENEBRA", "RAFAEL TSUTAI MASSAKI","REBÉCA RODRIGUES DE OLIVEIRA", "RODOLFO LEONARDO ROMO",
 "RODRIGO MIRANDA DOS SANTOS", "SARAH VITÓRIA PEDROSO DA SILVA", "TAYNA ADRIANA DA SILVA", "VANESSA ALVARES BERNARDO", "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
"VITOR TAKAYUKI HIROTOMI", "WYLLIAM DOS SANTOS FLORENTINO");


$Ganhador = $Aleatorio[array_rand($Aleatorio)];
echo "<h2>";
echo "O Ganhador Mais CANSAD- ... DOTADO é... ";
echo "<h3>";
echo " ".$Ganhador;
echo "</h3>";
echo "</h2>";
echo "Aperte o botão abaixo para saber o resultado";

?>
      <form class="d-flex" role="sorteio">
      <button class="btn btn-outline-success" type="submit">Resultado</button>
      </form>
      

<?php include "rodape.php"; ?>