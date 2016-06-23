<?php
// Point to where you downloaded the phar
include('httpful.phar');
include("Cabecalho.php"); 
$first_name=$_GET['first_name'];
// And you're ready to go!
if (!empty($_GET['pass'])){
$response = \Httpful\Request::get("http://localhost/ReviewNStore/user/?first_name=".$_GET['first_name']."&pass=".$_GET['pass'])->send();

$request_response = json_decode($response->body);

if($request_response==null){
	echo 'Senha Errada!';
}else{

?><h1> Voce logou com sucesso!</h1>
<?php

foreach($request_response as $value)
{
?>
<a class="list-group-item" name="first_name" > Nome: <?php echo $value->first_name . '<br>';
}?><a>

<?php 
foreach($request_response as $value)
{
?><a class="list-group-item">Endereço: <?php echo $value->address . '<br>';
}?><a>
<?php 

foreach($request_response as $value)
{
?><a class="list-group-item">Telefone: <?php echo $value->phone . '<br>';
}?><a>
<?php 

foreach($request_response as $value)
{
?><a class="list-group-item">Email: <?php echo $value->email . '<br>';
}?></a>
<form action=AlterarUsuario.php method="get" name="form1">
	<p>Entre com seu nome para atualizar seus dados:</p>
	<input name="first_name" ></input>
	<button class="btn btn-primary" type="submit" value="submit" name="submit"/>Update</button>
</form>
<?php }
}Else{
	Echo "Insira a senha!";
}
 ?>


<?php include("rodape.php");?>


