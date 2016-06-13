<?php include("Cabecalho.php")?>
                <h1>Formulario de Cadastro do usuário</h1>
                <form action="insertuser.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome " class="form-control" type="text" name="first_name"></td>
                       </tr>
                       <tr>
                           <td>Endereço</td>
                           <td><input Placeholder="Insira o endereco " class="form-control" name="address" ></td> 
                       </tr> 
                       <tr>
                           <td>Telefone:</td>
                           <td> <input Placeholder="Insira o telefone " class="form-control" type="text" 
                           name="phone" onKeyPress="MascaraTelefone(form1.telefone);" 
                           maxlength="14" onBlur="ValidaTelefone(form1.telefone);"></td>
                       </tr> 
                       <tr>
                           <td>Email:</td>
                           <td><input  Placeholder="Insira o Email " class="form-control"  name="email" maxlength="8"></td>
                       </tr> 
                       <tr>
                           <td>Senha:</td>
                           <td><input Placeholder="Insira o nome do pai " class="form-control" type="text" name="pass"></td>
                       </tr> 
                                      
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                       </tr>
                       <tr>
                            <td>
                                <img src="Imagens/witcher3.jpg" alt="Smiley face" height="300" width="400">
                            </td>

                            <td>
                                <img src="Imagens/ds3.jpg" alt="Smiley face" height="300" width="400">
                            </td>

                            <td>
                                <img src="Imagens/sf.jpg" alt="Smiley face" height="300" width="400">
                            </td>
                        </tr>                       
                    </table>
                </form>    
 <?php include("rodape.php")?>