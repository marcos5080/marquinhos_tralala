<?php


    require "conexao_exemplo.php";


 if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        
     
        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome do predio em branco'); window.location.href='inserir.php'; </script>";

        }
        if(empty($idade)){

            echo "<script> alert('Campo Numero do predio em branco'); window.location.href='inserir.php'; </script>";

        }

        $stmt = $pdo->prepare("INSERT INTO exemplo(nome,idade) VALUES (:nome, :idade)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->execute();

       echo "<script> alert('Informações cadastradas com sucesso'); window.location.href='inserir.php'; </script>";
 }




?>

<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <?php
    require"topo.php";
 ?>

    <form method="post">
    <label>Nome: </label>
    <input type="text" name="nome">

    <br>

    <label>Idade: </label>
    <input type="text" name="idade">

    <br>

    <button type="submit" name="enviar">Enviar</button>
</form>

</body>
</html>