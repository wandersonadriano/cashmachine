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

    <hr/>
    
    <?php
        $transactions = Transaction::showTransactions($pdo, $_SESSION['account-id']);
        if(isset($transactions)){
            print_r($transactions);
        }
        
        #include 'transactionTemplate.php';
    ?>
    <a href="models/logout.php">Sair</a>
</body>
</html>