
<?php


    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $n = $_POST['n'];

        if(empty($nome)){

            echo "<script>alert('Campo nome em Branco'); window.location.href='cadastro.php';</script>";


        }

    
        if(empty($idade)){

            echo "<script>alert('Campo idade em Branco'); window.location.href='cadastro.php';</script>";


        }
        if(empty($rg)){

            echo "<script>alert('Campo rg em Branco'); window.location.href='cadastro.php';</script>";


        }
        if(empty($cpf)){

            echo "<script>alert('Campo cpf em Branco'); window.location.href='cadastro.php';</script>";


        }
        if(empty($estado)){

            echo "<script>alert('Campo estado em Branco'); window.location.href='cadastro.php';</script>";


        }
        if(empty($bairro)){

            echo "<script>alert('Campo bairro em Branco'); window.location.href='cadastro.php';</script>";


        }
        if(empty($n)){

            echo "<script>alert('Campo n em Branco'); window.location.href='cadastro.php';</script>";


        }

        echo "nome: " . $nome . "<br>". "idade: " . $idade. "<br>" . "RG". $rg . "<br>" . "CPF" . $cpf . "<br>" . "Estado Civil: " . $estado . "<br>" . "Bairro" . $bairro . "<br>" . "N: " . $n . "<br>";


     }else{

         echo "<script>alert('Por favor clique no botao');window.location.href='cadastro.php';</script>";
    }


?>