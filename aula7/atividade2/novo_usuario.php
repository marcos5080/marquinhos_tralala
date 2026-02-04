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

        <form action="novo_usuario_action.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: left;">Novo Usuario</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <label>Nome do usuario:</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Digite seu nome"> 
                    
                </div>
                
                
            </div>
        
            <div class="row" style="margin-bottom: 3%;">

                <div class="col-md-4">
                    <label>CPF:</label>
                    <input type="number" class="form-control"  name="cpf" placeholder="Digite seu CPF">
                   
                </div>

                <div class="col-md-4">
                    <label>Endereço</label>
                    <input type="text" class="form-control"  name="endereco" placeholder="Digite seu email">
                    
                </div>

                <div class="col-md-1">
                    <label>Nivel</label>
                    <input type="number" class="form-control"   name="nivel" placeholder="nivel">
                    
                </div>
                <div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="email" class="form-control"   name="email" placeholder="Digite seu email">
                </div> 

                <div class="col-md-4">
                    <label>Senha</label>
                    <input type="text" class="form-control"   name="senha" placeholder="Digite sua senha">
                    
                </div>            

                <div class="col-md-3">
                    <label>Status</label>
                    <input type="number" class="form-control"   name="status" placeholder="Informe seu status">
                    
                </div>     
                
                </div>
            </div>
            <div class="row" style="margin-left: 65%">
                <div class="col-md-1">
                    <button type="submit" id="btn" name="enviar">enviar</button>
                </div>
           
                <div class="col-md-1" style="margin-left: 5%">
                    <button type="submit" id="btn" name="cancelar">cancelar</button>
                </div>
            </div>
                
            </form>


        </div>


    
</body>
</html>
    
<script src="script2.js"></script>