

<?php

$a = 5;
$b = 5;
$c = 10;

if ( $a == $b){

echo "elas sao iguais";

}else{

echo "elas nao sao iguais";

}

echo "<br>";
echo "<br>";

if($a == $b && $b < $c){

    echo "E verdade";

}else{

    echo "E mentira";

}

echo "<br>";
echo "<br>";

    if( $a > $b || $c > $a){

    echo " E verdade pelo menos uma vez";

    }else{

    echo  "E mentira pelo menos uma vez";
    
    }

    echo "<br>";
    echo "<br>";

    if($a >= $c){

        echo "E verdade uma vez";

    }else if($b <= $c){

        echo "E verdade na segunda vez";

    }


?>
