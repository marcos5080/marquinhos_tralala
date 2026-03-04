<?php

    require "../Controller/Action_SQL2.php";

    $nova_delecao = new Action_SQL2;

    $id = $_GET['id'];

    $nova_delecao->deletar($id);

?>