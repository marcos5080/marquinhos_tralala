<?php require "../projeto_exemplo/topo.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
    <title>Doc-doc</title>
</head>
<body id="caixaCadastro">

   

    <div class="container">

        <form action="cadastro_clie.php" method="post">

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <h1 style="text-align: left;">Dados Pessoais</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <label>Nome do Cliente:</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome do cliente"> 
                    
                </div>
                
                
            </div>
        
            <div class="row" style="margin-bottom: 3%;">

                <div class="col-md-4">
                    <label>CPF:</label>
                    <input type="number" class="form-control"  name="cpf" placeholder="000.000.000-00">
                   
                </div>

                <div class="col-md-4">
                    <label>Data de Nascimento</label>
                    <input type="date" class="form-control"  name="datadenascimento" placeholder="Digite sua data de nascimento">
                    
                </div>

                <div class="col-md-4">
                    <div class="row" style="margin-bottom: 3%;">
                        <label>Sexo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="masculino">
                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="feminino">
                        <label class="form-check-label" for="inlineRadio2">Feminino</label>
                    </div>
                    
                  
                </div>
                <div class="row">
                <div class="col-md-4">
                    <label>Estado Civil</label>
                    <select class="form-select" aria-label="Default select example" name="estadocivil">
                    <option selected>Selecione</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                    <option value="Viuvo(a)">Viuvo(a)</option>
                    <option value="Uniao Estavel">Uniao Estavel</option>
                    </select>
                    
                  
                </div> 

                <div class="col-md-4">
                    <label>Renda Mensal</label>
                    <input type="number" class="form-control"   name="rendamensal" placeholder="0,00">
                    
                </div>           
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="margin-right: 70%; "id="btn" name="enviar">enviar</button>
                </div>
            </div>

        
                
            </form>


        </div>


    
</body>
</html>
    
<script src="script2.js"></script>