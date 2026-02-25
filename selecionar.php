
<?php

    require"conexao.php";

    $stmt = $pdo->prepare("SELECT * FROM imoveis");
    $stmt->execute();


?>