<?php

    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";

    $nova_delecao = new Action_SQL;

    $id = $_GET['id'];

    $nova_delecao->deletar($id);

?>

