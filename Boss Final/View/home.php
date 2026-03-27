<?php

  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }

?>

<?php

    
    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";
    $nova_selecao = new Action_SQL;
    $resultado = $nova_selecao->selecionar();

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

    <title>Boss Final</title>
  </head>
  <style>
    body {
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
<body>
 <div class="container">

 <?php
    require "../Includes/topo.php";
 ?>

 <h1 style="margin-bottom: 3%; margin-top: 3%; text-align: center;">Filmes Cadastrados</h1>
  <!-- On tables -->
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Alugador</th>
      <th scope="col">Titulo do Filme</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Status de Alugado</th>
        <th scope="col">Ações</th>

    </tr>
  </thead>
  <tbody>
    <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) :  ?>
    <tr>
        
        <td> <?=$row['id']; ?> </td>
        <td> <?=$row['alugador']; ?> </td>
        <td> <?=$row['titulo_do_filme']; ?> </td>
        <td> <?=$row['sinopse']; ?> </td>
        <td> <?=$row['status_de_alugado']; ?> </td>
        
        
         
        <td> 
            <a class="btn btn-primary" href="editar.php?id=<?= $row['id']; ?>">Editar</a> 
            <a class="btn btn-danger" href="../Services/deletar.php?id=<?= $row['id']; ?>" onclick="return confirm('Voce tem certeza que quer deletar?')">Deletar</a></td>   
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>



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