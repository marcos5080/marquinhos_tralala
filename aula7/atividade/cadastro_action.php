
<?php


    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];

        if(empty($nome)){

            echo "<script>alert('Campo nome em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }

    
        if(empty($email)){

            echo "<script>alert('Campo email em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
        if(empty($telefone)){

            echo "<script>alert('Campo telefone em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
        if(empty($celular)){

            echo "<script>alert('Campo celular em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
        if(empty($sexo)){

            echo "<script>alert('Campo sexo em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
        if(empty($estado)){

            echo "<script>alert('Campo estado em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
         if(empty($cidade)){

            echo "<script>alert('Campo cidade em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
         if(empty($bairro)){

            echo "<script>alert('Campo bairro em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }
         if(empty($numero)){

            echo "<script>alert('Campo numero em Branco'); window.location.href='cadastro_fornecedor.php';</script>";


        }

        echo "nome: " . $nome . "<br>". "email: " . $email. "<br>" . "Telefone". $telefone . "<br>" . "Celular" . $celular . "<br>" . "Sexo: " . $sexo . "<br>" . "Estado" . $estado . "<br>" . "Cidade: " . $cidade . "<br>" . "Bairro" . $bairro . "<br>" . "Numero" . $numero . "<br>";


     }else{

         echo "<script>alert('Por favor clique no botao');window.location.href='cadastro.php';</script>";
    }


?>