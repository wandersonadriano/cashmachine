<?php
class Transaction{

    public function addNewTransaction(PDO $pdo, $id){
        if(isset($id) && !empty($id) && isset($_POST['amount']) && !empty($_POST['amount'])){

            $transctionType = addslashes($_GET['transactionType']);
            $amount = str_replace(',', '.', addslashes($_POST['amount']));
            $amount = floatval($amount);

            $sql = "INSERT INTO historico (id_conta, tipo, valor, data_operacao)
            VALUES (:accountId, :transactionType, :amount, NOW()";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':accountId', $id);
            $sql->bindValue(':transactionType', $transctionType);
            $sql->bindValue(':amount', $amount);
            $sql->execute();    

        }
    }

    public function showTransactions(PDO $pdo, $id){
        $sql = "SELECT * WHERE id_conta = :id DESC";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        $array = [];
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $data){
                array_push($array,[
                    'id' => $data['$id'],
                    'type' => $data['tipo'],
                    'transactionDate' => $data['data_operacao'],
                    'amount' => $data['valor']
                ]);
            }
        }
        return $array;
    }


    private function updateBalance($id, $amount, $transctionType){
        $sql = "UPDATE conta SET saldo = saldo + :amount";
    }
}