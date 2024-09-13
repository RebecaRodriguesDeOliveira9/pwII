<?php include"cabecalho.php"; ?>
 <h1>laço de repatição FOR</h1>
 <p>esse laço de repetição é mais utilizado e mais prático </p>
 <pre>
     for($i = 0; $i < 10; $i++ ){
echo "$i";
     }
    </pre>
    <?php
    for($i = 0; $i<= 10; $i++){
        echo"<b>Oiii</b><br>";
    }
?>
<?php
 for($i = 0; $i < 3; $i++ )
 {
     ?>
     <b>Oiii</b><br>
     <?php
 }
 ?>

<?php include "rodape.php"; ?>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>