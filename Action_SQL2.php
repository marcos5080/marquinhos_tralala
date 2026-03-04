<?php 

    class Action_SQL2{


        public function selecionar(){

            require "../Conexao/conexao.php";

            $stmt = $pdo->prepare("SELECT * FROM carros");
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao Selecionar'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }

        public function selecionar_id($id){

            require"../Conexao/conexao.php";

            if(isset($id) && trim($id) && $id != NULL ){

                $stmt = $pdo->prepare("SELECT * FROM carros WHERE id = :id");
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
            $marca,
            $chassi,
            $rodas){

                require "../Conexao/conexao.php";

                $stmt = $pdo->prepare("INSERT INTO carros (nome, marca, chassi, rodas) VALUES (:nome, :marca, :chassi, :rodas)");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":marca", $marca);
                $stmt->bindParam(":chassi", $chassi);
                $stmt->bindParam(":rodas", $rodas);
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

        public function editar($id, $nome, $marca, $chassi, $rodas){

            require "../Conexao/conexao.php";

             if(isset($id) && trim($id) && $id != NULL ){

                $stmt = $pdo->prepare("UPDATE carros SET nome = :nome, marca = :marca, chassi = :chassi, rodas = :rodas WHERE id = :id");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":marca", $marca);
                $stmt->bindParam(":chassi", $chassi);
                $stmt->bindParam(":rodas", $rodas);
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

        require"../Conexao/conexao.php";

            if(isset($id) && $id != NULL ){

                $stmt = $pdo->prepare("DELETE FROM carros WHERE id = :id");
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