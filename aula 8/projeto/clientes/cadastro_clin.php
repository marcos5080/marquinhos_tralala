


<?php


    if(isset($_POST['cadastrar'])){

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
    

        echo "Nome: " . $nome . "<br>" . "CPF: " . $cpf . "<br>" . "Data de nascimento: ". $datadenascimento . "<br>" . "Sexo: " . $sexo . "<br>" . "Estado civil: " . $estadocivil . "<br>" . "Renda mensal: " . $rendamensal . "<br>";


     }else{

         echo "<script>alert('Por favor clique no botao');window.location.href='novo_usuario_action.php';</script>";
    }


?>