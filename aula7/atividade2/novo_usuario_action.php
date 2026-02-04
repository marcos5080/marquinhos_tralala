
<?php


    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
   
    $nivel = $_POST['nivel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];

        if(empty($nome)){

            echo "<script>alert('Campo nome em Branco'); window.location.href='novo_usuario.php';</script>";


        }

    
        if(empty($cpf)){

            echo "<script>alert('Campo cpf em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
        if(empty($endereco)){

            echo "<script>alert('Campo endereco em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
        if(empty($nivel)){

            echo "<script>alert('Campo nivel em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
        if(empty($email)){

            echo "<script>alert('Campo email em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
         if(empty($senha)){

            echo "<script>alert('Campo senha em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
         if(empty($status)){

            echo "<script>alert('Campo status em Branco'); window.location.href='novo_usuario.php.php';</script>";


        }
    

        echo "nome: " . $nome . "<br>". "cpf: " . $cpf. "<br>" . "endereco". $endereco . "<br>" . "nivel: " . $nivel . "<br>" . "email" . $email . "<br>" . "senha: " . $senha . "<br>" . "status" . $status . "<br>";


     }else{

         echo "<script>alert('Por favor clique no botao');window.location.href='novo_usuario_action.php';</script>";
    }


?>