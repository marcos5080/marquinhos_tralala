<?php

    require "Animais.php";
    $novo_animal = new Animais;



    $novo_animal->nome = "Tatu";
    $novo_animal->quant_patas = "4";
    $novo_animal->habitat = "Floresta";
    $novo_animal->comida_fav = "Formiga";
   

    echo "Nome: " . $novo_animal->nome . "<br>" .
        "Quantidade de patas: " . $novo_animal->quant_patas . "<br>" . 
        "Habitat: " . $novo_animal->habitat . "<br>" . 
        "Comida Favorita" . $novo_animal->comida_fav . "<br>";

    
    
    
    
    echo"<br>";
    echo "Novo animal"; 
    echo"<br>";
    echo"<br>";
    $novo_animal->nome = "Tigre";
    $novo_animal->quant_patas = "4";
    $novo_animal->habitat = "Savana";
    $novo_animal->comida_fav = "Outros animais";

    echo "Nome: " . $novo_animal->nome . "<br>" .
        "Quantidade de patas: " . $novo_animal->quant_patas . "<br>" . 
        "Habitat: " . $novo_animal->habitat . "<br>" . 
        "Comida Favorita" . $novo_animal->comida_fav . "<br>";
   


    echo"<br>";
    echo "Novo animal"; 
    echo"<br>";
    echo"<br>";
    $novo_animal->nome = "Dinossauro";
    $novo_animal->quant_patas = "2/4";
    $novo_animal->habitat = "Floresta/água/céu";
    $novo_animal->comida_fav = "Outros animais";

    echo "Nome: " . $novo_animal->nome . "<br>" .
        "Quantidade de patas: " . $novo_animal->quant_patas . "<br>" . 
        "Habitat: " . $novo_animal->habitat . "<br>" . 
        "Comida Favorita" . $novo_animal->comida_fav;
   

?>