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
    <div id="home">
        <header>
            <h1>
                WBank
            </h1>
        </header>
        
        <?php
            $account = User::showAccountData($pdo);
        
            if(!isset($account)){
                echo "Erro ao acessar dados da conta!";
            } else {
                include 'userTemplate.php';
            }
        ?>

        
        <a href="views/transactionTemplate.php?transactionType=0">DEPOSITAR</a><br/>
        <a href="views/transactionTemplate.php?transactionType=1">RETIRAR</a>
        
        <hr/>

        <?php
            $transactions = new Transaction();
            
            $transactions = $transactions->showTransactions($pdo, $_SESSION['account-id']);
            if(isset($transactions) && !empty($transactions)){
                include 'passbookTemplate.php';
            }
            
        ?>
    </div>
</body>
</html>