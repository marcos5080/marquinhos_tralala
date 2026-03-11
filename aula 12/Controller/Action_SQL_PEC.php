<?php 

    require "../Conexao/Conexao.php";
    


    class Action_SQL_PEC{


        public function selecionar_PEC($PEC){

            $nova_conexao = new Conexao;


            $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM " . $PEC);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao Selecionar'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }

        public function selecionar_id($id){

            $nova_conexao = new Conexao;

      

            if(isset($id) && trim($id) && $id != NULL ){

                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM livros WHERE id = :id");
                $stmt->bindPARam(":id", $id);
                $stmt->execute();

                 $resultado = $stmt;

                 if($resultado != TRUE){

                    echo "<script> alert('Erro ao Selecionar'); window.location.href='../View/cadastrar.php'; </script>";
                    exit;

                    }



            }else{

                echo "<script> alert('ID nao encontrado ou inavalido'); window.location.href='../View/home.php'; </script>";
                exit;

             }

            return $stmt;


        }

        public function inserir(
            $nome,
            $descricao,
            $genero,
            $quant_folhas){

                    $nova_conexao = new Conexao;

            

                $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO livros (nome, descricao, genero, quant_folhas) VALUES (:nome, :descricao, :genero, :quant_folhas)");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":genero", $genero);
                $stmt->bindParam(":quant_folhas", $quant_folhas);
                $stmt->execute();

                $resultado = $stmt;

                 if($resultado != TRUE){

                echo "<script> alert('Erro ao Inserir'); window.location.href='../View/cadastrar.php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao Cadastrar Informações'); window.location.href='../View/cadastrar.php'; </script>";
                exit;


            }


            }

        public function editar($id, $nome, $descricao, $genero, $quant_folhas){

            

             if(isset($id) && trim($id) && $id != NULL ){

                 $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE livros SET nome = :nome, descricao = :descricao, genero = :genero, quant_folhas = :quant_folhas WHERE id = :id");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":genero", $genero);
                $stmt->bindParam(":quant_folhas", $quant_folhas);
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao Atualizar'); window.location.href='../View/editar.php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao atualizar'); window.location.href='../View/home.php'; </script>";
                    exit;


                }

             }else{

                echo "<script> alert('ID nao encontrado ou inavalido'); window.location.href='../View/home.php'; </script>";
                exit;

             }

        }

        public function deletar($id){

            $nova_conexao = new Conexao;

            if(isset($id) && $id != NULL ){

                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM livros WHERE id = :id");
                $stmt->bindPARam(":id", $id);
                $stmt->execute();

                 $resultado = $stmt;

                 if($resultado != TRUE){

                    echo "<script> alert('Erro ao Selecionar'); window.location.href='../View/home.php'; </script>";
                    exit;

                }else{

                 echo "<script> alert('Sucesso ao Excluir'); window.location.href='../View/home.php'; </script>";
                    exit;


                }



            }else{

                echo "<script> alert('ID nao encontrado ou inavalido'); window.location.href='../View/home.php'; </script>";
                exit;

             }

        }

    }

?>