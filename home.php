<?php

    require "selecionar.php";

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

    <title>Aula 11</title>
  </head>
<body>
 <div class="container">

 <?php
    require"topo.php";
 ?>

 <h1 style="margin-bottom: 3%; margin-top: 3%;">Imoveis</h1>
  <!-- On tables -->
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Comprimento</th>
      <th scope="col">Largura</th>
      <th scope="col">Material</th>
        <th scope="col">Ações</th>

    </tr>
  </thead>
  <tbody>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :  ?>
    <tr>
        <td> <?=$row['id']; ?> </td>
        <td> <?=$row['nome']; ?> </td>
        <td> <?=$row['tipo']; ?> </td>
        <td> <?=$row['comprimento']; ?> </td>
        <td> <?=$row['largura']; ?> </td>
        <td> <?=$row['material']; ?> </td>
         
        <td> 
            <a class="btn btn-primary" href="editar.php?id=<?= $row['id']; ?>">Editar</a> 
            <a class="btn btn-danger" href="deletar.php?id=<?= $row['id']; ?>" onclick="return confirm('Voce tem certeza que quer deletar?')">Deletar</a></td>   
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</div>   
    
</body>
</html>