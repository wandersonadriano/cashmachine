<div class="account-info">
    <div class="account-holder">
        Olá, <?php echo $account['accountHolder']; ?>
    </div>
    <div class="account-branch-number">
        Ag: <?php echo $account['branch']; ?> | 
        CC: <?php echo $account['accountNumber']; ?>-
            <?php echo $account['accountNumberDigit']; ?>
    </div>
    <div class="account-balance">
        Saldo: <?php echo $account['balance']; ?>
    </div>
</div>
