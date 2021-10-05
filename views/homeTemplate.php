<div id="home">
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/images/logo_by_logaster.png"/>
                <span class="logo-name">Bank</span>
            </div>
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
