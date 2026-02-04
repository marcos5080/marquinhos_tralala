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

        <form action="cadastro_clie.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Avaliação</h1>
                </div>
            </div>
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-md-12"> 
                    
                    <input type="text" class="form-control"  name="nome" placeholder="Razao social"> 
                    
                </div>
                
                
            </div>
        

            
            <div class="row" style="margin-bottom: 3%;">

                <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="CNPJ">
                   
                </div>

        

                <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="inscricaoestadual" placeholder="Inscricao Estadual">
                   
                </div>
                </div>
                

                <div class="row" style="margin-bottom: 2%;">
                 <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="logradouro" placeholder="Logradouro">
                   
                </div>

                <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="Bairro">
                   
                </div>
                </div>
                <div class="row">
                <div class="col-md-6" style="margin-bottom: 2%;">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="Municipio">
                   
                </div>

                <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="UF">
                   
                </div>
                </div>

                <div class="row">
                <div class="col-md-6" style="margin-bottom: 2%;">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="CEP">
                   
                </div>

                <div class="col-md-6">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="Telefone">
                   
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    
                    <input type="number" class="form-control"  name="cpf" placeholder="Email">
                   
                </div>
                  </div>
                
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style= "margin-left:90%;"id="btn" name="enviar">enviar</button>
                </div>
            </div>

        
                
            </form>


     </div>


    
</body>
</html>
    
<script src="script2.js"></script>