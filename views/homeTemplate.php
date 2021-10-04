
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
