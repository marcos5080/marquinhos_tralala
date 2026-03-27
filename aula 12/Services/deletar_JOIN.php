<?php

    require "../Controller/Action_SQL_PEC.php";
   

    $nova_delecao = new Action_SQL_PEC;

    $id = $_GET['id'];

    $nova_delecao->deletar_JOIN($id);

?>

