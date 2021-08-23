<div class="account--info">
    <div class="container">
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
</div>

<div class="balance--info">
    <div class="balance--title">Saldo</div>
    <div class="account--balance">
        <?php echo "R$ ".number_format($account['balance'], 2, ',', '.'); ?>
    </div>
    <div class="transaction--buttons">
        <a href="views/transactionTemplate.php?transactionType=0">DEPOSITAR</a><br/>
        <a href="views/transactionTemplate.php?transactionType=1">RETIRAR</a>
    </div>
</div>