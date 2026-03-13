<?php

    require "../Controller/Action_SQL_PEC.php";
    

    $nova_delecao = new Action_SQL_PEC;

    $id = $_GET['id'];
    $PEC_RECEBIDO = $_GET['PEC_ENVIADO'];

    $nova_delecao->deletar_PEC($PEC_RECEBIDO, $id);

?>

