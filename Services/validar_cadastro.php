<?php

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";
    require "../Conexao/Conexao.php";
    
    $novo_livro = new Livros;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

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

        $novo_livro->setNome($nome);
        $novo_livro->setDescricao($descricao);
        $novo_livro->setGenero($genero);
        $novo_livro->setQuant_folhas($quant_folhas);

    }



   

    if($novo_livro->getNome() != "" &&
        $novo_livro->getDescricao() != "" &&
        $novo_livro->getGenero() != "" &&
        $novo_livro->getQuant_folhas() != ""){

        $nova_insercao->inserir(
            $novo_livro->getNome(),
            $novo_livro->getDescricao(),
            $novo_livro->getGenero(),
            $novo_livro->getQuant_folhas());

        }
?>



<?php

    require "../Model/Carros.php";
    require "../Controller/Action_SQL2.php";

    $novo_carro = new Carros;
    $nova_insercao2 = new Action_SQL2;

    if(isset($_POST['enviar2'])){

        $nome = $_POST['nome'];
        $marca= $_POST['marca'];
        $chassi = $_POST['chassi'];
        $rodas = $_POST['rodas'];

         if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($marca))){

            echo "<script> alert('Campo Marca em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($chassi))){

            echo "<script> alert('Campo Chassi em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }
        if(empty(trim($rodas))){

            echo "<script> alert('Campo Rodas em branco'); window.location.href='../View/cadastrar2.php'; </script>";
            exit;

        }

        $novo_carro->setNome($nome);
        $novo_carro->setMarca($marca);
        $novo_carro->setChassi($chassi);
        $novo_carro->setRodas($rodas);

    }



   

    if($novo_carro->getNome() != "" &&
        $novo_carro->getMarca() != "" &&
        $novo_carro->getChassi() != "" &&
        $novo_carro->getRodas() != ""){

        $nova_insercao2->inserir(
            $novo_carro->getNome(),
            $novo_carro->getMarca(),
            $novo_carro->getChassi(),
            $novo_carro->getRodas());

        }
?>