<?php

    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";
    
    $novo_filme = new Filmes;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $alugador = $_POST['alugador'];
        $titulo_do_filme = $_POST['titulo_do_filme'];
        $ano_do_filme = $_POST['ano_do_filme'];
        $genero_do_filme = $_POST['genero_do_filme'];
        $classificacao_indicativa = $_POST['classificacao_indicativa'];
        $diretor_do_filme = $_POST['diretor_do_filme'];
        $sinopse = $_POST['sinopse'];
        $status_de_alugado = $_POST['status_de_alugado'];
        
        

        if(empty(trim($alugador))){

            echo "<script> alert('Campo Alugador em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
         if(empty(trim($titulo_do_filme))){

            echo "<script> alert('Campo Titulo do Filme em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        if(empty(trim($ano_do_filme))){

            echo "<script> alert('Campo Ano do Filme em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        if(empty(trim($genero_do_filme))){

            echo "<script> alert('Campo Genero do Filme em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        if(empty(trim($classificacao_indicativa))){

            echo "<script> alert('Campo Classificação Indicativa em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        if(empty(trim($diretor_do_filme))){

            echo "<script> alert('Campo Diretor do Filme em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        if(empty(trim($sinopse))){

            echo "<script> alert('Campo Sinopse em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }
        
         if(empty(trim($status_de_alugado))){

            echo "<script> alert('Campo Status_de_alugado em branco'); window.location.href='../View/cadastrar_titulo_do_filme.php'; </script>";
            exit;

        }
        
        $novo_filme->setAlugador($alugador);
        $novo_filme->setTitulo_do_filme($titulo_do_filme);
        $novo_filme->setAno_do_filme($ano_do_filme);
        $novo_filme->setGenero_do_filme($genero_do_filme);
        $novo_filme->setClassificacao_indicativa($classificacao_indicativa);
        $novo_filme->setDiretor_do_filme($diretor_do_filme);
        $novo_filme->setSinopse($sinopse);
        $novo_filme->setStatus_de_alugado($status_de_alugado);
        

    }



   

    if( $novo_filme->getAlugador()!= "" &&
        $novo_filme->getTitulo_do_filme() != "" &&
        $novo_filme->getAno_do_filme() != "" &&
        $novo_filme->getGenero_do_filme() != "" &&
        $novo_filme->getClassificacao_indicativa() != "" &&
        $novo_filme->getDiretor_do_filme() != "" &&
        $novo_filme->getSinopse() != "" &&
        $novo_filme->getStatus_de_alugado() != ""){

        $nova_insercao->inserir(
            $novo_filme->getAlugador(),
            $novo_filme->getTitulo_do_filme(),
            $novo_filme->getAno_do_filme(),
            $novo_filme->getGenero_do_filme(),
            $novo_filme->getClassificacao_indicativa(),
            $novo_filme->getDiretor_do_filme(),
            $novo_filme->getSinopse(),
            $novo_filme->getStatus_de_alugado());

        }
?>



