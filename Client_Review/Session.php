<?php
include("cabecalho.php");
?>
Ola: <?php
session_start();
 echo  $_SESSION['first_name'];
?>

<?php include("rodape.php");?>
