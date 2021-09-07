<?php
    require 'models/User.php';
    require 'models/Transaction.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Caixa Eletrônico</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
    <div id="home">
        <header>
            <div class="container">
                <h1>
                    WBank
                </h1>
            </div>
        </header>
        
        <?php
            $account = User::showAccountData($pdo);
        
            if(!isset($account)){
                echo "Erro ao acessar dados da conta!";
            } else {
                include 'userTemplate.php';
            }
        ?>

        <?php
            $transactions = new Transaction();
            
            if(isset($_GET['transactionType'])){
                $transactions->addNewTransaction($pdo, $_SESSION['account-id']);
                include 'transactionTemplate.php';
            } else {
                $transactions = $transactions->showTransactions($pdo, $_SESSION['account-id']);
                if(isset($transactions) && !empty($transactions)){
                    include 'passbookTemplate.php';
                }
            }
            
        ?>
    </div>
</body>
</html>