<?php
// Point to where you downloaded the phar
include('httpful.phar');
include("Cabecalho.php"); 
// And you're ready to go!
$response = \Httpful\Request::get("http://localhost/ReviewNStore/product/?first_name=".$_GET['first_name'])->send();

$request_response = json_decode($response->body);
if($request_response==null){
	echo 'Jogo não existe!';
}else{

		?><h1>Resultados</h1><?php
		foreach($request_response as $value)
		{
		?><a class="list-group-item">Nome do jogo: <?php echo $value->first_name . '<br>';
		}?></a>

		<?php 
		foreach($request_response as $value)
		{
		?><a class="list-group-item">Genero: <?php echo $value->genre . '<br>';
		}?></a>
		<?php 

		foreach($request_response as $value)
		{
		?><a class="list-group-item">Console: <?php echo $value->console . '<br>';
		}?></a>
		<?php 

		foreach($request_response as $value)
		{
		?><a class="list-group-item">Data: <?php echo $value->date . '<br>';
		}?></a>
		<?php

		foreach($request_response as $value)
		{
		?><a class="list-group-item">Loja: <?php echo $value->store . '<br>';
		}?></a>
		<?php 

		foreach($request_response as $value)
		{
		?><a class="list-group-item">Preco: <?php echo $value->price . '<br>';
		}?></a>
		<?php 

		foreach($request_response as $value)
		{
		?><a class="list-group-item">Review: <?php echo $value->review . '<br>';
		}
		}?></a></p>

<?php include("rodape.php");?>