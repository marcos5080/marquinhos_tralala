<?php
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
  <style>


    #caixa{

        height: 500px;
        width: 500px;
    }

    #img{
        height: 20%;
        width: 20%;
        margin-top: 4%;
        margin-right: 4%;
        margin-left: 4%;

    }

  </style>
  <body>
    
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div id="caixa "><img src="patinho.jpg" alt="Imagem nao exibida" id="img">
            </div>
                
            </div>

            <div class="col-md-6">
                   <ul class="nav">
                      
                        <div class="nav-item">
                            <a class="nav-link active" href="exemplo2.php">Exemplo 2</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="exemplo3.php">Exemplo 3</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="exemplo1.php">Exemplo</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link disabled" href="exemplo_desativado.php" tabindex="-1" aria-disabled="true">desabilitado</a>
                        </div>
                    </ul>

            </div>


        </div>

     

       
        

    </div>



















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>