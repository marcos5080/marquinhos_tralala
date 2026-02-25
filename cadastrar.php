<?php


    require "conexao.php";


 if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];
        $material = $_POST['material'];
        
     
        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='cadastrar.php'; </script>";
            exit;

        }
        if(empty($tipo)){

            echo "<script> alert('Campo tipo em branco'); window.location.href='cadastrar.php'; </script>";
            exit;
        }
        if(empty($comprimento)){

            echo "<script> alert('Campo comprimento em branco'); window.location.href='cadastrar.php'; </script>";
            exit;
        }
        if(empty($largura)){

            echo "<script> alert('Campo largura em branco'); window.location.href='cadastrar.php'; </script>";
            exit;
        }
        if(empty($material)){

            echo "<script> alert('Campo material em branco'); window.location.href='cadastrar.php'; </script>";
            exit;
        }

        $stmt = $pdo->prepare("INSERT INTO imoveis(nome,tipo,comprimento,largura,material) VALUES (:nome, :tipo, :comprimento, :largura, :material)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":comprimento", $comprimento);
        $stmt->bindParam(":largura", $largura);
        $stmt->bindParam(":material", $material);
        $stmt->execute();

       echo "<script> alert('Informações cadastradas com sucesso'); window.location.href='cadastrar.php'; </script>";
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
    <title>Doc-doc</title>
</head>
<body>

    <?php
        require"topo.php";
    ?>

    <div class="container">
        
        <form method="post">

        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Nome: </label>
                <input class="form-control" type="text" name="nome">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Tipo: </label>
                <input class="form-control" type="text" name="tipo">
            </div>
            

            <div class="col-md-2">
                <label class="form-label">Comprimento: </label>
                <input class="form-control"  type="text" name="comprimento">
            </div>

            <div class="col-md-4">
                <label class="form-label">Largura: </label>
                <input class="form-control" type="text" name="largura">
            </div>
        </div>
 
    
        <div class="row">
        
            <div class="col-md-12">
                <label class="form-label">Material: </label>
                <input class="form-control" name="material">
            </div>

        </div>

        <div class="row">   
            <button style="margin-top: 2%; margin-left: 25%; width:50%; background-color:aqua" type="submit" name="enviar">Enviar</button>
        </div>
        
</form>

</div>
</body>
</html>