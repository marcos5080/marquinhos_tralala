<?php

    require "../Model/usuario.php";
    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";
    require_once '../PHPMailer-master/src/PHPMailer.php';
    require_once '../PHPMailer-master/src/SMTP.php';
    require_once '../PHPMailer-master/src/Exception.php';

    
    $novo_usuario = new Filmes;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
     

        
         if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;

        }
        if(empty(trim($email))){

            echo "<script> alert('Campo Email em branco'); window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;

        }
        if(empty(trim($senha))){

            echo "<script> alert('Campo senha do Filme em branco'); window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;

        }
        if(empty(trim($telefone))){

            echo "<script> alert('Campo telefone em branco'); window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;       
        }

        $novo_usuario->setNome($nome);
        $novo_usuario->setEmail($email);
        $novo_usuario->setSenha($senha);
        $novo_usuario->setTelefone($telefone);
       
    }



   

    if( $novo_usuario->getNome() != "" &&
        $novo_usuario->getEmail() != "" &&
        $novo_usuario->getSenha() != "" &&
        $novo_usuario->getTelefone() != ""){

        

            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 't88422858@gmail.com';
            $mail->Password = 'cxaquvkbhlhdarad';
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('t88422858@gmail.com', 'Email para envio de informações');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Teste de email';

            $mail->Body = "
            <strong>Aqui esta o seu Nome</strong>
            <p>$nome</p>
            <strong>Aqui esta o seu Email</strong>
            <p>$email</p>
            <strong>Aqui esta a sua senha</strong>
            <p>$senha</p>
            <strong>Aqui esta o seu telefone</strong>
            <p>$telefone</p>
            ";


            // Enviar o e-mail antes de retornar a resposta
            if ($mail->send()) {
            echo "<script> alert('Inserido e Email enviado com sucesso');window.location.href='../View/cadastrar_usuario.php'; </script>";
            } else {
            error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
            }
            } catch (Exception $e) {
            echo "<script> alert('Erro ao enviar o email');window.location.href='../View/cadastrar_usuario.php'; </script>";
            }
        }
?>



