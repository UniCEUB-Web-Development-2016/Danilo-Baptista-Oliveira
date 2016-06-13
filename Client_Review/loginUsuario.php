<?php
// Point to where you downloaded the phar
include('httpful.phar');
include("Cabecalho.php"); 
// And you're ready to go!
if (!empty($_GET['pass'])){
$response = \Httpful\Request::get("http://localhost/ReviewNStore/user/?first_name=".$_GET['first_name']."&pass=".$_GET['pass'])->send();

$request_response = json_decode($response->body);
?><h1> Voce logou com sucesso!</h1><?php

foreach($request_response as $value)
{
?><center><blockquote><p class=lead>Nome: <?php echo $value->first_name . '<br>';
}?><p>

<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Endereço: <?php echo $value->address . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Telefone: <?php echo $value->phone . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Email: <?php echo $value->email . '<br>';
}?><p></blockquote><center>

<?php }
Else{
	Echo "Insira a senha seu energumeno!";
}
 ?>
}


<?php include("rodape.php");?>
