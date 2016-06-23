<?php include("Cabecalho.php")?>
                <h1>Cadastre um review:</h1>
                <form action="insertReview.php" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome do review " class="form-control" type="text" name="reviewname"></td>
                       </tr>
                       <tr>
                           <td>Text</td>
                           <td><input Placeholder="Insira o texto " class="form-control" name="text" ></td> 
                       </tr> 
                       <tr>
                           <td>Tips:</td>
                           <td> <input Placeholder="Insira as dicas " class="form-control" type="text" 
                           name="tips" 
                           maxlength="14" ></td>
                       </tr> 
                       <tr>
                           <td>Videos:</td>
                           <td><input  Placeholder="Insira o link de um video " class="form-control" type="text" name="videos" ></td>
                       </tr> 
                       <tr>
                           <td>Images:</td>
                           <td><input Placeholder="Insira uma imagem .jpg " class="form-control" type="text" name="images"></td>
                       </tr> 
                           <td>
                               <button class="btn btn-primary" type="submit"/>Cadastrar</button>
                           </td>
                       </tr>
                    </table>
                </form>    
            </div>    
        </div>
    </body>
</html>
<?php include("rodape.php")?>