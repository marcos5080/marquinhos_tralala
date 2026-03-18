<?php

    require "../Model/regioes.php";
    require "../Controller/Action_SQL_PEC.php";
   
    $atualizar_regiao = new Regioes;
    $nova_atualizacao = new Action_SQL_PEC;

    if(isset($_POST['enviar'])){

        $nome_pais = $_POST['nome_pais'];
        $nome_estado = $_POST['nome_estado'];
        $nome_cidade = $_POST['nome_cidade'];
       

         if(empty(trim($nome_pais))){

            echo "<script> alert('Campo Nome do pais em branco'); window.location.href='../View/editar_regioes.php'; </script>";
            exit;

        }
        if(empty(trim($nome_estado))){

            echo "<script> alert('Campo Nome do estado em branco'); window.location.href='../View/regioes.php'; </script>";
            exit;

        }
        if(empty(trim($nome_cidade))){

            echo "<script> alert('Campo Nome da cidade em branco'); window.location.href='../View/regioes.php'; </script>";
            exit;

        }
        

        $atualizar_regiao->setPais($nome_pais);
        $atualizar_regiao->setEstado($nome_estado);
        $atualizar_regiao->setCidade($nome_cidade);
      
    }




   

    if($atualizar_regiao->getPais() != "" &&
       $atualizar_regiao->getEstado() != "" &&
        $atualizar_regiao->getCidade() != "" ){

        $nova_atualizacao->editar_JOIN(
            $id,
            $atualizar_regiao->getPais(),
            $atualizar_regiao->getEstado(),
            $atualizar_regiao->getCidade());

        }
?>

