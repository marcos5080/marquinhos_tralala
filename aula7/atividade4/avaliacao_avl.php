
<?php


    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $datadenascimento = $_POST['datadenascimento'];
    $sexo = $_POST['sexo'];
    $estadocivil = $_POST['estadocivil'];
    $rendamensal = $_POST['rendamensal'];

        if(empty($nome)){

            echo "<script>alert('Campo nome em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }

    
        if(empty($cpf)){

            echo "<script>alert('Campo cpf em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }
        if(empty($datadenascimento)){

            echo "<script>alert('Campo datadenascimento em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }
        if(empty($sexo)){

            echo "<script>alert('Campo sexo em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }
        
         if(empty($estadocivil)){

            echo "<script>alert('Campo estadocivil em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }
         if(empty($rendamensal)){

            echo "<script>alert('Campo rendamensal em Branco'); window.location.href='cadastro_clientes.php';</script>";


        }
    

        echo "nome: " . $nome . "<br>". "cpf: " . $cpf. "<br>" . "datadenascimento". $datadenascimento . "<br>" . "sexo " . $sexo . "<br>" . "estadocivil" . $estadocivil . "<br>" . "rendamensal " . $rendamensal . "<br>";


     }else{

         echo "<script>alert('Por favor clique no botao');window.location.href='novo_usuario_action.php';</script>";
    }


?>