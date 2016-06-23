
<?php include("Cabecalho.php"); ?>
                <h1>Logue em sua conta!</h1>
                <form action="loginUsuario.php" method="get" name="form1" id="formlogin">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome "  type="text" name="first_name" id="first_name"></td>
                       </tr>
                       <tr>
                           <td>senha:</td>
                           <td><input Placeholder="Insira a senha " type="password" name="pass" id="pass"></td>
                       </tr>                
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit" value="submit" name="submit"/>Entrar</button>
                           </td>
                       </tr>
                    </table>
                </form> 
 <?php include("rodape.php")?>

