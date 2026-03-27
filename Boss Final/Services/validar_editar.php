<?php

    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";

    $atualizar_filme = new Filmes;
    $nova_atualizacao = new Action_SQL;

    if(isset($_POST['editar'])){

        $id = $_POST['id'];
        $titulo_do_filme = $_POST['titulo_do_filme'];
        $ano_do_filme = $_POST['ano_do_filme'];
        $genero_do_filme = $_POST['genero_do_filme'];
        $classificacao_indicativa = $_POST['classificacao_indicativa'];
        $diretor_do_filme = $_POST['diretor_do_filme'];
        $sinopse = $_POST['sinopse'];
        $alugador = $_POST['alugador'];
        $status_de_alugado = $_POST['status_de_alugado'];

         if(empty(trim($titulo_do_filme))){

            echo "<script> alert('Campo Titulo do Filme em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($ano_do_filme))){

            echo "<script> alert('Campo Ano do Filme em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($genero_do_filme))){

            echo "<script> alert('Campo Genero do Filme em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($classificacao_indicativa))){

            echo "<script> alert('Campo Classificação Indicativa em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($diretor_do_filme))){

            echo "<script> alert('Campo Diretor do Filme em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($sinopse))){

            echo "<script> alert('Campo Sinopse em branco'); window.location.href='../View/cadastrar_filmes.php'; </script>";
            exit;

        }
        if(empty(trim($status_de_alugado))){

            echo "<script> alert('Campo Status_de_alugado em branco'); window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;

        }

        $atualizar_filme->setAlugador($alugador);
        $atualizar_filme->setTitulo_do_filme($titulo_do_filme);
        $atualizar_filme->setAno_do_filme($ano_do_filme);
        $atualizar_filme->setGenero_do_filme($genero_do_filme);
        $atualizar_filme->setClassificacao_indicativa($classificacao_indicativa);
        $atualizar_filme->setDiretor_do_filme($diretor_do_filme);
        $atualizar_filme->setSinopse($sinopse);
        $atualizar_filme->setStatus_de_alugado($status_de_alugado);

    }


   

   if($atualizar_filme->getTitulo_do_filme() != "" &&
        $atualizar_filme->getAno_do_filme() != "" &&
        $atualizar_filme->getGenero_do_filme() != "" &&
        $atualizar_filme->getClassificacao_indicativa() != "" &&
        $atualizar_filme->getDiretor_do_filme() != "" &&
        $atualizar_filme->getSinopse() != "" &&
        $atualizar_filme->getAlugador() != "" &&
        $atualizar_filme->getStatus_de_alugado() != ""){

        $nova_atualizacao->editar(
            $id,
            $atualizar_filme->getStatus_de_alugado(),
            $atualizar_filme->getTitulo_do_filme(),
            $atualizar_filme->getAno_do_filme(),
            $atualizar_filme->getGenero_do_filme(),
            $atualizar_filme->getClassificacao_indicativa(),
            $atualizar_filme->getDiretor_do_filme(),
            $atualizar_filme->getSinopse(),
            $atualizar_filme->getAlugador()
            );

        }
?>

