<?php

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    $atualizar_livro = new Livros;
    $nova_atualizacao = new Action_SQL;

    if(isset($_POST['editar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $quant_folhas = $_POST['quant_folhas'];

         if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;

        }
        if(empty(trim($descricao))){

            echo "<script> alert('Campo descricao em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;

        }
        if(empty(trim($genero))){

            echo "<script> alert('Campo genero em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;

        }
        if(empty(trim($quant_folhas))){

            echo "<script> alert('Campo quant_folhas em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;

        }

        $atualizar_livro->setNome($nome);
        $atualizar_livro->setDescricao($descricao);
        $atualizar_livro->setGenero($genero);
        $atualizar_livro->setQuant_folhas($quant_folhas);

    }



   

    if($atualizar_livro->getNome() != "" &&
       $atualizar_livro->getDescricao() != "" &&
        $atualizar_livro->getGenero() != "" &&
        $atualizar_livro->getQuant_folhas() != ""){

        $nova_atualizacao->editar(
            $id,
            $atualizar_livro->getNome(),
            $atualizar_livro->getDescricao(),
            $atualizar_livro->getGenero(),
            $atualizar_livro->getQuant_folhas());

        }
?>

<?php

    require "../Model/Carros.php";
    require "../Controller/Action_SQL2.php";

    $atualizar_carro = new Carros;
    $nova_atualizacao2 = new Action_SQL2;

    if(isset($_POST['editar2'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $chassi = $_POST['chassi'];
        $rodas = $_POST['rodas'];

         if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($marca))){

            echo "<script> alert('Campo marca em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($chassi))){

            echo "<script> alert('Campo chassi em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($rodas))){

            echo "<script> alert('Campo Rodas em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }

        $atualizar_carro->setNome($nome);
        $atualizar_carro->setMarca($marca);
        $atualizar_carro->setChassi($chassi);
        $atualizar_carro->setRodas($rodas);

    }

   

    if($atualizar_carro->getNome() != "" &&
       $atualizar_carro->getMarca() != "" &&
        $atualizar_carro->getChassi() != "" &&
        $atualizar_carro->getRodas() != ""){

        $nova_atualizacao2->editar(
            $id,
            $atualizar_carro->getNome(),
            $atualizar_carro->getMarca(),
            $atualizar_carro->getChassi(),
            $atualizar_carro->getRodas());

        }
?>