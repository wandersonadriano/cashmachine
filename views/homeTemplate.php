<div id="home">
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/images/logo_by_logaster.png"/>
                <span class="logo-name">Bank</span>
            </div>
            <a href="models/logout.php">
                <div class="btn-logout">
                    <img src="assets/images/outline_logout_white_24dp.png" />
                    <span>Sair</span>
                </div>    
            </a>
        </div>
    </header>
            
    <?php
        $user = new User();

        $account = $user->showAccountData($pdo);

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
