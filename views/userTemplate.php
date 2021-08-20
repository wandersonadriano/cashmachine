<div class="account--info">
    <div class="account--holder">
        Olá, <?php echo $account['accountHolder']; ?>
    </div>
    <div class="account-branch-number">
        Ag: <?php echo $account['branch']; ?> | 
        CC: <?php echo $account['accountNumber']; ?>-
            <?php echo $account['accountNumberDigit']; ?>
    </div>
   
    <a href="models/logout.php">Sair</a>
</div>
<div class="balance--info">
    <div class="balance--title">Saldo</div>
    <div class="account--balance">
        <?php echo "R$ ".number_format($account['balance'], 2, '.', ','); ?>
    </div>
</div>