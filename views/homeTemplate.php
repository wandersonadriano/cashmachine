<?php
    require 'models/User.php';
    require 'models/Transaction.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Caixa Eletrônico</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, inicial-scale=1.0"/>
</head>
<body>
    <h1>
        Banco WMC
    </h1>
    
    <hr/>
    
    <?php
        $account = User::showAccountData($pdo);
    
        if(!isset($account)){
            echo "Erro ao acessar dados da conta!";
        } else {
            include 'userTemplate.php';
        }
    ?>

    <a href="models/logout.php">Sair</a>
    <hr/>
    
    <a href="views/transactionTemplate.php?transactionType=0">DEPOSITAR</a><br/>
    <a href="views/transactionTemplate.php?transactionType=1">RETIRAR</a>
    
    <hr/>
    
    <?php
        /*$transactions = Transaction::showTransactions($pdo, $_SESSION['account-id']);
        if(isset($transactions)){
            print_r($transactions);
        }*/
        
        #include 'transactionTemplate.php';
    ?>
    
</body>
</html>