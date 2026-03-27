<?php

    require "Conexao/Conexao.php";

    session_start();
    if(isset($_POST['logar'])){

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //Validação de campos em branco(empty) e espaços(trim)
        if(empty(trim($usuario))){

            echo "<script> alert('Campo Usuário em branco'); window.location.href='index.php'; </script>";
            exit;
        }
        if(empty(trim($senha))){

            echo "<script> alert('Campo Senha em branco'); window.location.href='index.php'; </script>";
            exit;
        }


        //Conecta com o banco e seleciona as informações certas
        $nova_conexao = new Conexao;

        $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $usuario);
        $stmt->execute();

        $resultado = $stmt;

        if(!$resultado){

            echo "<script> alert('Foi impossivel de selecionar'); window.location.href='index.php'; </script>";
            
        }

        //Entrega valores traduzidos para a variavel comparar
        $comparar = $stmt->fetch(PDO::FETCH_ASSOC);


        //Verificar e logar o usuario
        if($usuario == $comparar['email'] && $senha == $comparar['senha']){

            //Inicio a sessão de logado e enviou para a tela de login
            $_SESSION['logado'] = TRUE;
            header("Location: View/home.php");

        }else{

            echo "<script> alert('Usuario ou senha incorretos'); window.location.href='index.php'; </script>";
            
        }

       

    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="exemplo_projeto/estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
<style>

    body {
    background: radial-gradient(circle at center, #1a1a1a, #000);
    color: #e6d3a3;
    font-family: "Georgia", serif;
}

/* Caixa central estilo interrogatório */
.noir-box {
    background: rgba(0, 0, 0, 0.9);
    padding: 40px;
    border-radius: 12px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 0 40px rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
}

/* Pato detetive */
.duck-img {
    width: 100px;
    margin-bottom: 15px;
    filter: grayscale(100%) contrast(120%);
}

/* Título */
.titulo-noir {
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #f5e6c8;
    margin-bottom: 10px;
}

/* Frase impactante */
.frase-noir {
    text-align: center;
    font-style: italic;
    font-size: 0.9rem;
    color: #aaa;
    margin-bottom: 25px;
}

/* Inputs */
.input-noir {
    background: transparent;
    border: 1px solid #444;
    color: #e6d3a3;
}

.input-noir:focus {
    background: transparent;
    border-color: #c9b37e;
    box-shadow: none;
    color: #fff;
}

/* Botão estilo noir */
.btn-noir {
    background: transparent;
    border: 1px solid #c9b37e;
    color: #c9b37e;
    transition: 0.3s;
}

.btn-noir:hover {
    background: #c9b37e;
    color: #000;
}

/* Efeito granulado tipo filme antigo */
body::after {
    content: "";
    position: fixed;
    width: 100%;
    height: 100%;
    background-image: url("https://www.transparenttextures.com/patterns/noise.png");
    opacity: 0.06;
    pointer-events: none;
}
</style>
 
  <body>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="noir-box">

        <h1 class="titulo-noir">Arquivo Confidencial</h1>

        <p class="frase-noir">
            "Na cidade onde todos mentem... até a verdade precisa de senha."
        </p>

        <form method="post" autocomplete="off">

            <div class="mb-3">
                <label>Identidade</label>
                <input type="text" class="form-control input-noir" name="usuario">
            </div>

            <div class="mb-3">
                <label>Código Secreto</label>
                <input type="password" class="form-control input-noir" name="senha">
            </div>

            <button class="btn btn-noir w-100" name="logar">
                Entrar no Caso
            </button>

        </form>

    </div>

</div>
  </body>
</html>