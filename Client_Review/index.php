
<?php
// Point to where you downloaded the phar
include('httpful.phar');
include("Cabecalho.php"); 
// And you're ready to go!
$response = \Httpful\Request::get('http://localhost/ReviewNStore/user/?first_name=amario')->send();

$request_response = json_decode($response->body);

foreach($request_response as $value)
{
	echo $value->first_name . '<br>';
	
}?>
                <h1>Formulario de login do usuário</h1>
                <form action="loginUsuario.php" method="get" name="formogin" id="formlogin">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome "  type="text" name="first_name" id="first_name"></td>
                       </tr>
                       <tr>
                           <td>senha:</td>
                           <td><input Placeholder="Insira a senha " type="text" name="pass" id="pass"></td>
                       </tr>                
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit" value="submit" name="submit"/>Entrar</button>
                           </td>
                       </tr>
                    </table>
                </form> 

<?php  include("rodape.php");?>

