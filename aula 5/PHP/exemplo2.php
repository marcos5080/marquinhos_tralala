

<?php


    if(isset ($_POST['enviar'])){

        $nome = $_POST['nome'];
        $nome = $_POST['idade'];

        echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "anos"; 

    }else{

        echo "Por favor, insira informações e clique no botão <3";

    }


?>