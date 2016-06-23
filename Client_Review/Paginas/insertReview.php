<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/ReviewNStore/review/?reviewname=".$_POST['reviewname']."&text=".$_POST['text']."&tips=".$_POST['tips']."&videos=".$_POST['videos']."&images=".$_POST['images'] ;

$response = \Httpful\Request::post($url)->send();

header('location:CadastroRealizado.php');