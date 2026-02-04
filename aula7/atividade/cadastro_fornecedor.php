<?php require "../projeto_exemplo/topo.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
    <title>Doc-doc</title>
</head>
<body id="caixaCadastro">

   

    <div class="container">

        <form action="cadastro_action.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Cadastro Fornecedor</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                    <label>Nome:</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Digite seu nome"> 
                    
                </div>
                <div class="col-md-6">
                    <label>Email:</label>
                    <input type="email" class="form-control"  name="email" placeholder="Digite seu email">
                   
                </div>
                
            </div>

            <div class="row" style="margin-bottom: 3%;">

                <div class="col-md-4">
                    <label>Telefone</label>
                    <input type="number" class="form-control"  name="telefone" placeholder="Digite seu telefone">
                    
                </div>

                <div class="col-md-4">
                    <label>Celular</label>
                    <input type="number" class="form-control"   name="celular" placeholder="Digite seu celular">
                    
                </div>
                <div class="col-md-4">
                    <label>Sexo</label>
                    <select name="sexo" class="form-select" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                     <option value="prefiro nao informar">Prefiro nao informar</option>
                    </select>
                </div> 

                <div class="col-md-4">
                    <label>Estado</label>
                    <select name="estado" class="form-select" aria-label="Default select example">
                    <option selected>Selecione um estado</option>
                    <option value="AL">AL</option>
                    <option value="BH">BH</option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="RS">RS</option>
                    </select>
                    
                    
                </div>            

                <div class="col-md-3">
                    <label>Cidade</label>
                    <select class="form-select" aria-label="Default select example" name="cidade">
                    <option selected>Selecione sua cidade</option>
                    <option value="Pelotas">Pelotas</option>
                    <option value="Bento Gonçalves">Bento Gonçalves</option>
                    <option value="Canela">Canela</option>
                    <option value="Porto Alegre">Porto Alegre</option>
                    <option value="Gramado">Gramado</option>
                    <option value="Caxias do Sul">Caxias do Sul</option>
                    </select>
                    
                    
                </div>     
                
                <div class="col-md-3">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="bairro" placeholder="Digite seu bairro">
                    
                </div>     

                <div class="col-md-2">
                    <label>Numero</label>
                    <input type="number" class="form-control" name="numero" placeholder="Informe o numero">
                    
                </div>     
                
                

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%; background-color:darkgreen"id="btn" name="enviar">enviar</button>
                </div>
            </div>
                
            </form>


        </div>


    
</body>
</html>
    
<script src="script2.js"></script>