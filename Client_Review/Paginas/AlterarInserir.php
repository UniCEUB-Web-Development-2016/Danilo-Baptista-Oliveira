<?php
include('httpful.phar');
$url = "http://localhost/ReviewNStore/user/?first_name=".$_POST['first_name']."&address=".$_POST['address']."&phone=".$_POST['phone']."&email=".$_POST['email']."&pass=".$_POST['pass'];
$response = \Httpful\Request::put($url)->send();
header('location:CadastroRealizado.php');
