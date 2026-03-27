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

   <style>     body {
    background: radial-gradient(circle at top, #1a1a1a, #000000);
    color: #e6d3a3;
    font-family: "Georgia", "Times New Roman", serif;
}

/* Container com efeito de cena */
.container {
    background: rgba(0, 0, 0, 0.85);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.05);
}

/* Título estilo noir */
h1 {
    font-size: 2.5rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #f5e6c8;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

/* Tabela estilo investigação */
.table {
    border: 1px solid rgba(255,255,255,0.1);
}

.table thead {
    background-color: #111;
    color: #c9b37e;
}

.table tbody tr {
    transition: 0.3s;
}

.table tbody tr:hover {
    background-color: rgba(255,255,255,0.05);
}

/* Texto mais "cinematográfico" */
td, th {
    vertical-align: middle;
}

/* Botões noir */
.btn-primary {
    background: transparent;
    border: 1px solid #c9b37e;
    color: #c9b37e;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #c9b37e;
    color: #000;
}

/* Botão deletar mais dramático */
.btn-danger {
    background: transparent;
    border: 1px solid #8b0000;
    color: #ff4d4d;
}

.btn-danger:hover {
    background: #8b0000;
    color: #fff;
}

/* Efeito "filme antigo" leve */
body::after {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("https://www.transparenttextures.com/patterns/asfalt-light.png");
    opacity: 0.08;
    pointer-events: none;
}
</style>
<body >

   

    <div class="container">

        <?php

        require "../Includes/topo.php";

        ?>
        <form  action ="../Services/validar_cadastro.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Cadastrar Filmes</h1>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <label>Alugador:</label>
                    <input type="text" class="form-control"  name="alugador" placeholder="Alugador">
                </div>

                <div class="col-md-6">
                    <label>Status</label>
                    <select class="form-select" name="status_de_alugado">
                    
                        <option value="alugado">Alugado</option>
                        <option value="nao alugado">Nao Alugado</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Titulo do Filme:</label>
                    <input type="text" class="form-control"  name="titulo_do_filme" placeholder="Titulo do Filme"> 
                </div>
                <div class="col-md-6">
                    <label>Ano do Filme:</label>
                    <input type="text" class="form-control"  name="ano_do_filme" placeholder="Ano do Filme">
                   
                </div>
                <div class="col-md-6">
                    <label>Genêro do Filme:</label>
                    <input type="text" class="form-control"  name="genero_do_filme" placeholder="Genero do Filme">
                   
                </div>
                <div class="col-md-6">
                    <label>Classificação Indicativa:</label>
                    <input type="number" class="form-control"  name="classificacao_indicativa" placeholder="Classificacao Indicativa">
                   
                </div>
                <div class="col-md-6">
                    <label>Diretor do Filme:</label>
                    <input type="text" class="form-control"  name="diretor_do_filme" placeholder="Diretor">
                   
                </div>
                  <div class="col-md-6">
                    <label>Sinopse:</label>
                    <input type="text" class="form-control"  name="sinopse" placeholder="Sinopse">
                   
                </div>
                   
    

            </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 2%;" id="btn" name="enviar">enviar</button>
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
    

