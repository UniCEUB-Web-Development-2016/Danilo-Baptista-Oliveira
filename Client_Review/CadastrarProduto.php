<?php include("Cabecalho.php")?>
                <h1>Cadastre um produto:</h1>
                <form action="insertProduct.php" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome do jogo" class="form-control" type="text" name="first_name"></td>
                       </tr>
                       <tr>
                           <td>Genre</td>
                           <td><input Placeholder="Insira o genero do jogo" class="form-control" name="genre" ></td> 
                       </tr> 
                       <tr>
                           <td>Console:</td>
                           <td> <input Placeholder="Insira o console do jogo " class="form-control" type="text" 
                           name="console" o
                           maxlength="14"></td>
                       </tr> 
                       <tr>
                           <td>Data de lançamento:</td>
                           <td><input  Placeholder="Insira a data " class="form-control" type="date" name="date" ></td>
                       </tr> 
                       <tr>
                           <td>Store:</td>
                           <td><input Placeholder="Insira o nome da loja " class="form-control" type="text" name="store"></td>
                       </tr> 
                       <tr>
                           <td>Preco:</td>
                           <td><input Placeholder="Insira o preço do produto " class="form-control" type="text" name="price"></td>
                       </tr>  
                       <tr>
                           <td>Review:</td>
                           <td><input Placeholder="Insira o nome do review " class="form-control" type="text" name="review"></td>
                       </tr>   
                       <tr>
                           <td>Images:</td>
                           <td><input   type="file" name="images" value="images"></td>
                       </tr>            
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                           
                       </tr>
                    </table>
                </form>    
 <?php include("rodape.php")?>
 