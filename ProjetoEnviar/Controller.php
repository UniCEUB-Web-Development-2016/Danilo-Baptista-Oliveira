
<?php

include "usuario.php";
$user = new Usuario();
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$confirmacaoemail = $_POST["confirmacaoemail"];
$senha = $_POST["senha"];
$confirmacaosenha = $_POST["confirmacaosenha"];


$user->setnome($nome);
$user->setsobrenome($sobrenome);
$user->setendereco($endereco);
$user->setemail($email);
$user->setconfirmacaoemail($confirmacaoemail);
$user->setsenha($senha);
$user->setconfirmacaosenha($confirmacaosenha);
$user->createTextArquive();
?>
