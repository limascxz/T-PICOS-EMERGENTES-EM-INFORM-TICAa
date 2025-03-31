<html>

<body>
    <form method="post" action="formulario.php">

</form>

<?php 
if (isset($_POST["enviar"])){
    $nome= $_POST["txtnome"];
    echo "<h2>Seu Nome  é $nome </h2>";
}else
   echo"<h2>Prencha com algum nome</h2>";
   ?>
</body>
</html>