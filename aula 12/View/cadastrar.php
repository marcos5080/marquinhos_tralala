

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
    <title></title>
</head>
<body >

   

    <div class="container">

        <?php

        require"../Includes/topo.php";

        ?>
        <form  action ="../Services/validar_cadastro.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Cadastrar Livros</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                    <label>Nome do Livro:</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome do Livro"> 
                    
                </div>
                <div class="col-md-6">
                    <label>Descrição:</label>
                    <input type="text" class="form-control"  name="descricao" placeholder="Descrição do livro">
                   
                </div>
                <div class="col-md-6">
                    <label>Genêro:</label>
                    <input type="text" class="form-control"  name="genero" placeholder="Genero do livro">
                   
                </div>
                <div class="col-md-6">
                    <label>Quantidade de Folhas:</label>
                    <input type="number" class="form-control"  name="quant_folhas" placeholder="Quantidade de Folhas do livro">
                   
                </div>
              

            </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn" name="enviar">enviar</button>
                </div>
            </div>
                
            </form>


        </div>


    
</body>
</html>
    

