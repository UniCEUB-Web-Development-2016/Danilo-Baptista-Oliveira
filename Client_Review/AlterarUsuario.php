<?php 
include("Cabecalho.php");
include('httpful.phar');


$response = \Httpful\Request::get("http://localhost/ReviewNStore/user/?first_name=".$_GET['first_name'])->send();

$request_response = json_decode($response->body);

foreach($request_response as $value)
{
$first_name=$value->first_name;
}
foreach($request_response as $value)
{
$address=$value->address;
}
foreach($request_response as $value)
{
$phone=$value->phone;
}
foreach($request_response as $value)
{
$email=$value->email;
}
foreach($request_response as $value)
{
$pass=$value->pass;
}
?>
                <h1>Altere os dados :</h1>
                <form action="AlterarInserir.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome " class="form-control" type="text" value="<?php echo $first_name?>" name="first_name"></td>
                       </tr>
                       <tr>
                           <td>Endereço</td>
                           <td><input Placeholder="Insira o endereco " class="form-control" name="address" value="<?php echo $address?>"></td> 
                       </tr> 
                       <tr>
                           <td>Telefone:</td>
                           <td> <input Placeholder="Insira o telefone " class="form-control" type="text" 
                           name="phone" onKeyPress="MascaraTelefone(form1.telefone);" 
                           maxlength="14" onBlur="ValidaTelefone(form1.telefone);" value="<?php echo $phone?>"></td>
                       </tr> 
                       <tr>
                           <td>Email:</td>
                           <td><input  Placeholder="Insira o Email " class="form-control"  name="email"  value="<?php echo $email?>"></td>
                       </tr>
                       <tr>
                           <td>Pass:</td>
                           <td><input  Placeholder="Insira o Email " class="form-control"  name="pass"  type="password"  value="<?php echo $pass?>"></td>
                       </tr>
                                      
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Atualizar</button>
                           </td>
                       </tr>                      
                    </table>
                </form>    
 <?php include("rodape.php")?>