<?php

    require "../Model/regioes.php";
    require "../Controller/Action_SQL_PEC.php";
   
    
    $nova_regiao = new Regioes;
    $nova_insercao = new Action_SQL_PEC;

    if(isset($_POST['enviar'])){

        $nome_pais = $_POST['nome_pais'];
        $nome_estado = $_POST['nome_estado'];
        $nome_cidade = $_POST['nome_cidade'];
       

         if(empty(trim($nome_pais))){

            echo "<script> alert('Campo Nome do pais em branco'); window.location.href='../View/regioes.php'; </script>";
            exit;

        }
        if(empty(trim($nome_estado))){

            echo "<script> alert('Campo Nome do estado em branco'); window.location.href='../View/regioes.php'; </script>";
            exit;

        }
        if(empty(trim($nome_cidade))){

            echo "<script> alert('Campo Nome da cidade em branco'); window.location.href='../View/regioes.php'; </script>";
            exit;

        }
        

        $nova_regiao->setPais($nome_pais);
        $nova_regiao->setEstado($nome_estado);
        $nova_regiao->setCidade($nome_cidade);
      
    }



   

    if($nova_regiao->getPais() != "" &&
        $nova_regiao->getEstado() != "" &&
        $nova_regiao->getCidade() != "" ){

        $nova_insercao->inserir_JOIN(
            $nova_regiao->getPais(),
            $nova_regiao->getEstado(),
            $nova_regiao->getCidade(),
            );

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