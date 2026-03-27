<?php 

   

    class Action_SQL{


        public function selecionar(){

           $nova_conexao = new Conexao;
            

            $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM locadora_de_filmes");
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

                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM locadora_de_filmes WHERE id = :id");
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
            
            $alugador,
            $titulo_do_filme,
            $ano_do_filme,
            $genero_do_filme,
            $classificacao_indicativa,
            $diretor_do_filme,
            $sinopse,
            $status_de_alugado){

                 $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO locadora_de_filmes ( status_de_alugado, titulo_do_filme, ano_do_filme, genero_do_filme, classificacao_indicativa, diretor_do_filme, sinopse, alugador) VALUES ( :status_de_alugado,:titulo_do_filme, :ano_do_filme, :genero_do_filme, :classificacao_indicativa, :diretor_do_filme, :sinopse, :alugador)");
                $stmt->bindParam(":alugador", $alugador);
                $stmt->bindParam(":titulo_do_filme", $titulo_do_filme);
                $stmt->bindParam(":ano_do_filme", $ano_do_filme);
                $stmt->bindParam(":genero_do_filme", $genero_do_filme);
                $stmt->bindParam(":classificacao_indicativa", $classificacao_indicativa);
                $stmt->bindParam(":diretor_do_filme", $diretor_do_filme);
                $stmt->bindParam(":sinopse", $sinopse);
                $stmt->bindParam(":status_de_alugado", $status_de_alugado);
               
                $stmt->execute();

                $resultado = $stmt;

                 if($resultado != TRUE){

                echo "<script> alert('Erro ao Inserir'); window.location.href='../View/cadastrar_filmes.php'; </script>";
                exit;

                }else{

                    echo "<script> alert('Sucesso ao Cadastrar Informações'); window.location.href='../View/cadastrar_filmes.php'; </script>";
                    exit;


                }


            }

        public function inserir_usuario( $nome,
            $email,
            $senha,
            $telefone){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO usuarios ( nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)");

                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":senha", $senha);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->execute();

                 $resultado = $stmt;

                 if($resultado != TRUE){

                echo "<script> alert('Erro ao Inserir Usuario'); window.location.href='../View/cadastrar_usuario.php'; </script>";
                exit;

            }/*else{

                echo "<script> alert('Sucesso ao Cadastrar Informações'); window.location.href='../View/cadastrar_usuario.php'; </script>";
                exit;


            }*/


            }

        public function editar_usuario($id, $nome,
            $email,
            $senha,
            $telefone){

             $nova_conexao = new Conexao;

             if(isset($id) && trim($id) && $id != NULL ){

                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone  WHERE id = :id");

                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":senha", $senha);
                $stmt->bindParam(":telefone", $telefone);
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

        public function editar(
            $id,  
            $status_de_alugado, 
            $titulo_do_filme,
            $ano_do_filme,
            $genero_do_filme,
            $classificacao_indicativa,
            $diretor_do_filme,
            $sinopse,
            $alugador
            ){

              $nova_conexao = new Conexao;

             if(isset($id) && trim($id) && $id != NULL ){

                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE locadora_de_filmes SET  status_de_alugado = :status_de_alugado, alugador = :alugador, titulo_do_filme = :titulo_do_filme, ano_do_filme = :ano_do_filme, genero_do_filme = :genero_do_filme, classificacao_indicativa = :classificacao_indicativa, diretor_do_filme = :diretor_do_filme, sinopse = :sinopse, alugador = :alugador  WHERE id = :id");
                
                $stmt->bindParam(":status_de_alugado", $status_de_alugado);
                $stmt->bindParam(":titulo_do_filme", $titulo_do_filme);
                $stmt->bindParam(":ano_do_filme", $ano_do_filme);
                $stmt->bindParam(":genero_do_filme", $genero_do_filme);
                $stmt->bindParam(":classificacao_indicativa", $classificacao_indicativa);
                $stmt->bindParam(":diretor_do_filme", $diretor_do_filme);
                $stmt->bindParam(":sinopse", $sinopse);
                $stmt->bindParam(":alugador", $alugador);
                
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

                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM locadora_de_filmes WHERE id = :id");
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