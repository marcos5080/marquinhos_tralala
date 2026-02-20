<?php


    require "conexao_pessoa.php";


 if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $genero = $_POST['genero'];
        $estado_civil = $_POST['estado_civil'];
        
     
        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='inserir_pessoa.php'; </script>";

        }
        if(empty($idade)){

            echo "<script> alert('Campo idade em branco'); window.location.href='inserir_pessoa.php'; </script>";

        }
        if(empty($sexo)){

            echo "<script> alert('Campo sexo em branco'); window.location.href='inserir_pessoa.php'; </script>";

        }
        if(empty($genero)){

            echo "<script> alert('Campo genero em branco'); window.location.href='inserir_pessoa.php'; </script>";

        }
        if(empty($estado_civil)){

            echo "<script> alert('Campo estado_civil em branco'); window.location.href='inserir_pessoa.php'; </script>";

        }




        $stmt = $pdo->prepare("INSERT INTO pessoa(nome,idade,sexo,genero,estado_civil) VALUES (:nome, :idade, :sexo,:genero, :estado_civil)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->bindParam(":sexo", $sexo);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":estado_civil", $estado_civil);
        $stmt->execute();

       echo "<script> alert('Informações cadastradas com sucesso'); window.location.href='inserir.php'; </script>";
 }




?>

<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
   
    <form method="post">
    <label>Nome: </label>
    <input type="text" name="nome">

    <br>

    <label>Idade: </label>
    <input type="text" name="idade">

    <br>

     <label>Sexo: </label>
    <input type="text" name="sexo">

    <br>

     <label>Genero: </label>
    <input type="text" name="genero">

    <br>

     <label>Estado Civil: </label>
    <input type="text" name="estado_civil">

    <br>

    <button type="submit" name="enviar">Enviar</button>
</form>

</body>
</html>