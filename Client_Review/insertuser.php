<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/ReviewNStore/user/?first_name=".$_POST['first_name']."&address=".$_POST['address']."&phone=".$_POST['phone']."&email=".$_POST['email']."&password=".$_POST['pass'];

$response = \Httpful\Request::post($url)->send();

header('location:CadastroRealizado.php');



// And you're ready to go!
//$response = \Httpful\Request::get('http://localhost/request/user/?first_name=sorte')->send();

//$request_response = json_decode($response->body);

//foreach($request_response as $value)
//{
//	echo $value->first_name . '<br>';
//	echo '<div class="checkbox">
 //         <label>
//            <input type="checkbox" value="remember-me"> Remember me
 //         </label>
//        </div>';
//}


