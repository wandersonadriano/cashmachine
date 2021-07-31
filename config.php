<?php

    $sdn = 'mysql:dbname=projeto_caixaeletronico;host=localhost';
    $dbuser = 'developer';
    $dbpassword = '';

    try{
        $pdo = new PDO($sdn, $dbuser, $dbpassword);
    } catch(PDOException $error){
        echo "Falha: ".$error->getMessage();
    }
    
?>