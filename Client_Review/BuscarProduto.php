<?php
// Point to where you downloaded the phar
include('httpful.phar');
include("Cabecalho.php"); 
// And you're ready to go!
$response = \Httpful\Request::get("http://localhost/ReviewNStore/product/?first_name=".$_GET['first_name'])->send();

$request_response = json_decode($response->body);
?><h1>Resultados</h1><?php
foreach($request_response as $value)
{
?><center><blockquote><p class=lead>Nome do jogo: <?php echo $value->first_name . '<br>';
}?><p>

<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Genero: <?php echo $value->genre . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Console: <?php echo $value->console . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Data: <?php echo $value->date . '<br>';
}?><p>
<?php

foreach($request_response as $value)
{
?>	<p class=lead>Loja: <?php echo $value->store . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Preco: <?php echo $value->price . '<br>';
}?><p>
<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Review: <?php echo $value->review . '<br>';
}?><p></blockquote><center>

<?php  
?>

<?php include("rodape.php");?>