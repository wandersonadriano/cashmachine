<?php
    require 'models/userInfo.php';

    if(!isset($data)){
        echo "Erro ao acessar dados da conta!";
    } else {
        ?>
        <div class="account-info">
            <div class="account-holder">
                Olá, <?php echo $accountHolder; ?>
            </div>
            <div class="account-branch-number">
                Ag: <?php echo $branch; ?> | 
                CC: <?php echo $accountNumber; ?>-<?php echo $accountNumberDigit; ?>
            </div>
            <div class="account-balance">
                Saldo: 0,00
            </div>
        </div>
        <?php
    }
?>