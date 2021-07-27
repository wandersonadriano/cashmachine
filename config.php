<?php

    $sdn = 'mysql:dbname=projeto_caixaeletronico;host=localhost';
    $dbuser = 'root';
    $dbpassword = 'M1ch43lJ4ck50n';

    try{
        $pdo = new PDO($sdn, $dbuser, $dbpassword);
    } catch(PDOException $error){
        echo "Falha: ".$error->getMessage();
    }
    
?>