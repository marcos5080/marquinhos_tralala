
<?php
    require "conexao.php";
    
    if($_GET['id']){

        $id = $_GET['id'];

        $stmt = $pdo->prepare("DELETE FROM imoveis WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        echo "<script> alert('Informações deletadas com sucesso'); window.location.href='home.php'; </script>";

    }else{

    echo "<script> alert('Usuario não encontrado'); window.location.href='home.php'; </script>";

    }

?>