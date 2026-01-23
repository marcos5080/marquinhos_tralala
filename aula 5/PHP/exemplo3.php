

<?php


    if(isset ($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $estadocivil = $_POST['estadocivil'];

        echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "anos" . "<br>"  . "sexo: " . $sexo . "<br>" . "estado civil" . $estadocivil; 

    }else{

        echo "Por favor, insira informações e clique no botão <3";

    }


?>