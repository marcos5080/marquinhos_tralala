 <?php 
 require "Conexao.php";
 $nova_conexao = new Conexao;
 

            

                $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO email (nome, idade, email, altura, peso, signo) VALUES (:nome, :idade, :email, :altura, :peso, :signo)");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":idade", $idade);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":altura", $altura);
                $stmt->bindParam(":peso", $peso);
                $stmt->bindParam(":signo", $signo);
                $stmt->execute();

                $resultado = $stmt;

                 if($resultado != TRUE){

                echo "<script> alert('Erro ao Inserir'); window.location.href='enviar_email.php'; </script>";
                exit;

            }
?>