<?php

require "conexao.php";

    if($_GET['id']){

        $id = $_GET['id'];

        if(isset($_POST['editar'])){

            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='editar.php'; </script>";

            }
             if(empty(trim($idade))){

            echo "<script> alert('Campo Idade em branco'); window.location.href='editar.php'; </script>";

          
             }
        

            $stmt = $pdo->prepare("UPDATE exemplo SET nome = :nome,idade= :idade WHERE id=:id");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            echo "<script> alert('Informações alteradas com sucesso'); window.location.href='home.php'; </script>";


        }/*else{

             echo "<script> alert('Por favor clique no botao'); window.location.href='editar.php'; </script>";

        }*/





    }else{

     echo "<script> alert('Usuario nao encontrado'); window.location.href='home.php'; </script>";

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

        <form  method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Editar Pessoa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                    <label>Nome:</label>
                    <input type="text" class="form-control"  name="nome"> 
                    
                </div>
                <div class="col-md-6">
                    <label>Idade:</label>
                    <input type="number" class="form-control"  name="idade">
                   
                </div>

            </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn" name="editar">editar</button>
                </div>
            </div>
                
            </form>


        </div>


    
</body>
</html>
    
