<?php

  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }

?>

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
                    <h1 style="text-align: center;">Cadastrar Carros</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                    <label>Nome do Carro:</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome do carro"> 
                    
                </div>
                <div class="col-md-6">
                    <label>Marca:</label>
                    <input type="text" class="form-control"  name="marca" placeholder="marca do carro">
                   
                </div>
                <div class="col-md-6">
                    <label>Chassi:</label>
                    <input type="text" class="form-control"  name="chassi" placeholder="Chassi">
                   
                </div>
                <div class="col-md-6">
                    <label>Rodas:</label>
                    <input type="number" class="form-control"  name="rodas" placeholder="rodas">
                   
                </div>
              

            </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 2%;" id="btn" name="enviar2">enviar</button>
                </div>
            </div>
                
            </form>

           


        </div>

         <?php

                require "../Includes/rodape.php";

        ?>



<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js&quot; integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js&quot; integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
</body>
</html>
    

