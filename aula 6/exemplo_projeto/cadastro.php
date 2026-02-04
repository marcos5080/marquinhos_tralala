<?php require "topo.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_projeto.css">
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
                    <h1 style="text-align: center;">Cadastro Pessoa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"> 
                    <label>Nome:</label>
                    <input type="text" class="form-control"  name="nome"> 
                    
                </div>
                <div class="col-md-2">
                    <label>Idade:</label>
                    <input type="number" class="form-control"  name="idade">
                   
                </div>
                <div class="col-md-6">
                    <label>RG</label>
                    <input type="text" class="form-control"  name="rg">
                    
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>CPF</label>
                    <input type="text" class="form-control"   name="cpf">
                    
                </div>
                <div class="col-md-6">
                    <label>Estado Civil</label>
                    <input type="text" class="form-control"  name="estado">
                    
                </div> 

                <div class="col-md-6">
                    <label>Bairro</label>
                    <input type="text" class="form-control"  name="bairro">
                    
                </div>            

                <div class="col-md-6">
                    <label>N</label>
                    <input type="text" class="form-control" name="n">
                    
                </div>     
                

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn" name="enviar">enviar</button>
                </div>
            </div>
                
            </form>


        </div>


    
</body>
</html>
    
<script src="script2.js"></script>