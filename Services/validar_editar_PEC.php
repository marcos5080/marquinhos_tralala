<?php

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL_PEC.php";
    

    $atualizar_regiao = new Regioes;
    $nova_atualizacao = new Action_SQL_PEC;

    if(isset($_POST['editar'])){

        $id = $_POST['id'];
        $PEC_RECEBIDO = $_POST['PEC_ENVIADO'];
        $nome = $_POST['nome'];


         if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/editar_PEC.php'; </script>";
            exit;

        }
        
        if($PEC_RECEBIDO == "cidade"){

         $atualizar_regiao->setCidade($nome);

        }else if($PEC_RECEBIDO == "estado"){

         $atualizar_regiao->setEstado($nome);

        }else if($PEC_RECEBIDO == "pais"){

         $atualizar_regiao->setPais($nome);

        }
    }



   

    
    if($atualizar_regiao->getCidade() != "" ||
        $atualizar_regiao->getEstado() != "" ||
        $atualizar_regiao->getPais() != ""){

        if($PEC_RECEBIDO == "cidade"){

         $nova_atualizacao->editar_PEC(
            $id,
            $PEC_RECEBIDO,
            $atualizar_regiao->getCidade());

        }

        if($PEC_RECEBIDO == "estado"){

         $nova_atualizacao->editar_PEC(
            $id,
            $PEC_RECEBIDO,
            $atualizar_regiao->getEstado());

        }

        if($PEC_RECEBIDO == "pais"){

         $nova_atualizacao->editar_PEC(
            $id,
            $PEC_RECEBIDO,
            $atualizar_regiao->getPais());

        }
       

        }
?>

