<?php

require "conexao.php";

    if($_GET['id']){

        $id = $_GET['id'];

        $stmt = $pdo->prepare("SELECT * FROM imoveis WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $requisicao = $stmt->fetch(PDO::FETCH_ASSOC);

        $resultado = $requisicao;

        if(isset($_POST['editar'])){

            $nome = $_POST['nome'];
            $tipo = $_POST['tipo'];
            $comprimento = $_POST['comprimento'];
            $largura = $_POST['largura'];
            $material = $_POST['material'];

            if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='editar.php'; </script>";
            exit;

            }
             if(empty(trim($tipo))){

            echo "<script> alert('Campo tipo em branco'); window.location.href='editar.php'; </script>";
            exit;
          
             }
             if(empty(trim($comprimento))){

            echo "<script> alert('Campo comprimento em branco'); window.location.href='editar.php'; </script>";
            exit;
          
             }
             if(empty(trim($largura))){

            echo "<script> alert('Campo largura em branco'); window.location.href='editar.php'; </script>";
            exit;
          
             }
             if(empty(trim($material))){

            echo "<script> alert('Campo material em branco'); window.location.href='editar.php'; </script>";
            exit;
          
             }
        
        
        
        

            $stmt = $pdo->prepare("UPDATE imoveis SET nome = :nome,tipo= :tipo,comprimento = :comprimento,largura = :largura, material = :material WHERE id=:id");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->bindParam(":comprimento", $comprimento);
            $stmt->bindParam(":largura", $largura);
            $stmt->bindParam(":material", $material);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            echo "<script> alert('Informações alteradas com sucesso'); window.location.href='home.php'; </script>";


        }/*else{

             echo "<script> alert('Por favor clique no botao'); window.location.href='editar.php'; </script>";

        }*/





    }else{

     echo "<script> alert('Usuario nao encontrado'); window.location.href='home.php'; </script>";
     exit;

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
                    <input type="text" class="form-control"  name="nome" value="<?=htmlspecialchars($resultado['nome'])?>"> 
                    
                </div>
                <div class="col-md-6">
                    <label>tipo:</label>
                    <input type="text" class="form-control"  name="tipo" value="<?=htmlspecialchars($resultado['tipo'])?>">
                   
                </div>
                <div class="col-md-6">
                    <label>Comprimento:</label>
                    <input type="text" class="form-control"  name="comprimento" value="<?=  htmlspecialchars($resultado['comprimento'])?>">
                   
                </div>
                <div class="col-md-6">
                    <label>Largura:</label>
                    <input type="text" class="form-control"  name="largura" value="<?= htmlspecialchars($resultado['largura'])?>">
                   
                </div>
                <div class="col-md-6">
                    <label>Material:</label>
                    <input type="text" class="form-control"  name="material" value="<?= htmlspecialchars($resultado['material'])?>">
                   
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
    
