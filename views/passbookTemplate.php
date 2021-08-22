<div class="transaction">
    <div class="container">
        <div class="transaction-title" style="font-weight: bold; font-size: 30px;">
            Extrato/Movimentações
        </div>
        <div class="transaction-table">
            <table border="1" width="400px">
                <throw>
                    <td>Data</td>
                    <td>Valor</td>
                </throw>
                <?php
                foreach ($transactions as $transaction):
                ?>
                <tr>
                    <td><?php echo $transaction['transactionDate']?></td>
                    <td><?php echo ($transaction['transactionType'] == 0) ? $transaction['amount'] : "-".$transaction['amount'] ?></td>
                </tr>
                <?php
                endforeach;  
                ?>
            </table>
        </div>
    </div>
</div>