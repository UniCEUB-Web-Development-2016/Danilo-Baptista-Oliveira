<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/ReviewNStore/product/?first_name=".$_POST['first_name']."&genre=".$_POST['genre']."&console=".$_POST['console']."&date=".$_POST['date']."&store=".$_POST['store']."&price=".$_POST['price']."&review=".$_POST['review']."&images=".$_POST['images'] ;

$response = \Httpful\Request::post($url)->send();

header('location:CadastroRealizado.php');