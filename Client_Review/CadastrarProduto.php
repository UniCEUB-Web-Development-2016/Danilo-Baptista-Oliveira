<?php include("Cabecalho.php")?>
                <h1>Formulario de Cadastro do produto</h1>
                <form action="insertProduct.php" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome " class="form-control" type="text" name="first_name"></td>
                       </tr>
                       <tr>
                           <td>Genre</td>
                           <td><input Placeholder="Insira o genero " class="form-control" name="genre" ></td> 
                       </tr> 
                       <tr>
                           <td>Console:</td>
                           <td> <input Placeholder="Insira o telefone " class="form-control" type="text" 
                           name="console" o
                           maxlength="14"></td>
                       </tr> 
                       <tr>
                           <td>Date:</td>
                           <td><input  Placeholder="Insira a data " class="form-control" type="date" name="date" ></td>
                       </tr> 
                       <tr>
                           <td>Store:</td>
                           <td><input Placeholder="Insira o nome do pai " class="form-control" type="text" name="store"></td>
                       </tr> 
                       <tr>
                           <td>Preco:</td>
                           <td><input Placeholder="Insira o nome da m�e " class="form-control" type="text" name="price"></td>
                       </tr>  
                       <tr>
                           <td>Review:</td>
                           <td><input Placeholder="Insira o nome da m�e " class="form-control" type="text" name="review"></td>
                       </tr>              
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("rodape.php")?>
 