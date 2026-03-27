<?php

    require "Predios.php";
    $novo_predio = new Predios;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];
        $quant_residentes = $_POST['quant_residentes'];
     
        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome do predio em branco'); window.location.href='predio.php'; </script>";

        }
        if(empty($numero)){

            echo "<script> alert('Campo Numero do predio em branco'); window.location.href='predio.php'; </script>";

        }
        if(empty($altura)){

            echo "<script> alert('Campo Altura em branco'); window.location.href='predio.php'; </script>";

        }
        if(empty($largura)){

            echo "<script> alert('Campo Nome do predio em branco'); window.location.href='predio.php'; </script>";

        }
        if(empty($quant_residentes)){

            echo "<script> alert('Campo quantidade de residentes em branco'); window.location.href='predio.php'; </script>";

        }


        $novo_predio->setNome($nome);
        $novo_predio->setNumero($numero);
        $novo_predio->setAltura($altura);
        $novo_predio->setLargura($largura);
        $novo_predio->setQuant_residentes($quant_residentes);
    }    



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 10</title>
  </head>
  <body id="caixaCadastroBody">
    
    <div id="caixaCadastroCentro">
        
    </div>

    <div id="caixaCadastroEsquerda" class="container">

    <form method="post">

          
            <div class="row">
                <div class="col-md-3">
                    <label>Nome do Predio</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-2">
                    <label>Numero do predio</label>
                    <input type="text" class="form-control" name="numero">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Altura do Predio</label>
                    <input type="text" class="form-control" name="altura">
                </div>
                <div class="col-md-3">
                    <label>Largura do Predio</label>
                    <input type="text" class="form-control" name="largura">
                </div>
            </div>
           <div class="row">
               <div class="col-md-3">
                    <label>Quantidade de Residentes</label>
                    <input type="text" class="form-control" name="quant_residentes">
                </div>
           </div>
            <div class="row" id="caixaCadastroBtn">
                <div class="col-md-1">
                    <button class="btn btn-primary" name="enviar">Enviar</button>
                </div>
            </div>

    </form>

    </div>

    <div id="caixaCadastroCentro">
        
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

<?php

    if($novo_predio->getNome() != "" &&
        $novo_predio->getNumero() != "" &&
        $novo_predio->getAltura() != "" &&
        $novo_predio->getLargura() != "" &&
        $novo_predio->getQuant_residentes() != "" )
        {

            echo "Nome do Predio: " . $novo_predio->getNome() . "<br>". 
                "Altura do Predio: " . $novo_predio->getAltura() . "<br>". 
                "Largura do Predio: " . $novo_predio->getLargura() . "<br>". 
                "Numero do Predio: " . $novo_predio->getNumero() . "<br>" . 
                "Quantidade de Residentes: " . $novo_predio->getQuant_residentes() . "<br>";


        }


?>