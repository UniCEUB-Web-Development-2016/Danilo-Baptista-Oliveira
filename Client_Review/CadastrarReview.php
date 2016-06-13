<?php include("Cabecalho.php")?>
                <h1>Formulario de Cadastro do review</h1>
                <form action="Executar?acao=Pessoa.salvar" method="post" name="form1">
                     <table class="table">
                        <tr>
                           <td>Nome:</td>
                           <td><input Placeholder="Insira o nome " class="form-control" type="text" name="nome"></td>
                       </tr>
                       <tr>
                           <td>Text</td>
                           <td><input Placeholder="Insira o cpf " class="form-control" name="cpf" ></td> 
                       </tr> 
                       <tr>
                           <td>Tips:</td>
                           <td> <input Placeholder="Insira o telefone " class="form-control" type="text" 
                           name="telefone" onKeyPress="MascaraTelefone(form1.telefone);" 
                           maxlength="14" onBlur="ValidaTelefone(form1.telefone);"></td>
                       </tr> 
                       <tr>
                           <td>Videos:</td>
                           <td><input  Placeholder="Insira o RG " class="form-control" type="number" name="RG" maxlength="8"></td>
                       </tr> 
                       <tr>
                           <td>Images:</td>
                           <td><input Placeholder="Insira o nome do pai " class="form-control" type="text" name="Pai"></td>
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