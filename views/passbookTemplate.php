<div class="transaction">
    <div class="container">
        <div class="transaction-title">
            Extrato/Movimentações
        </div>
        <div class="transaction--table">
            <div class="table-item--header">Data</div>
            <div class="table-item--header">Valor</div>
            <?php
            foreach ($transactions as $transaction):
            ?>   
                <div class="table-item--values">
                    <?php echo $transaction['transactionDate']?>
                </div>
                <div class="table-item--values">
                <?php 
                    echo ($transaction['transactionType'] == 0) ? 
                    "R$ ".number_format($transaction['amount'],2, ',', '.') : 
                    "- R$ ".number_format($transaction['amount'],2, ',', '.'); 
                ?>
                </div>
                    
            <?php
            endforeach;  
            ?>
        </div>
    </div>
</div>