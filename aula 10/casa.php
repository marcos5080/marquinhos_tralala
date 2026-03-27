<?php

    require "Mae.php";
    require "Filho.php";
    require "Filha.php";
    
    $info_mae = new Mae;
    $info_filha = new Filha;
    $info_filho = new Filho; 

    echo "Nome da mãe: " . $info_mae->nome . "<br>" . 
         "Nome da filha: " . $info_filha->nome. "<br>" .
          "Nome do filho: " . $info_filho->nome. "<br>";
    echo "<br>";
    
    echo "Idade da mâe: " . $info_mae->idade . "<br>" . 
        "Idade da filha: " . $info_filha->idade . "<br>" . 
        "Idade do filho: " . $info_filho->idade . "<br>" ;
         echo "<br>";

    echo "Altura da mãe: " . $info_mae->altura . "<br>" . 
        "Altura da filha: " . $info_filha->altura . "<br>" . 
        "Altura do filho: " . $info_filho->altura . "<br>" ;
            
?>