<?php
class Transaction{

    public function addNewTransaction(PDO $pdo){
        
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

}