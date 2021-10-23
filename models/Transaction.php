<?php
class Transaction{

    public function addNewTransaction(PDO $pdo, $id){
        if((isset($id) && !empty($id)) && (isset($_POST['amount']) && !empty($_POST['amount'])) && 
            isset($_GET['transactionType']) && 
            ($_GET['transactionType'] == 0 || $_GET['transactionType'] == 1)
        ){

            $transctionType = intval($_GET['transactionType']);
            $amount = str_replace(',', '.', addslashes($_POST['amount']));
            $amount = floatval($amount);

            $sql = "INSERT INTO historico SET id_conta = :accountId, tipo = :transactionType, valor = :amount, data_operacao = NOW()";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':accountId', $id);
            $sql->bindValue(':transactionType', $transctionType);
            $sql->bindValue(':amount', $amount);
            $sql->execute();
            
            $this->updateBalance($pdo, $id, $amount, $transctionType);
            
            header('Location: http://localhost:8080/cashmachine/index.php');
            exit;
        }
    }

    public function showTransactions(PDO $pdo, $id){
        
        $sql = "SELECT * FROM historico WHERE id_conta = :id ORDER BY data_operacao DESC";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        $array = array();
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $data){
                array_push($array,[
                    'id' => $data['id'],
                    'transactionType' => $data['tipo'],
                    'transactionDate' => $data['data_operacao'],
                    'amount' => $data['valor']
                ]);
            }
        }
        return $array;
    }


    private function updateBalance($pdo, $id, $amount, $transctionType){
        if($transctionType == 0){
            $sql = "UPDATE conta SET saldo = (saldo + :amount) WHERE id = :id";
        } else if($transctionType == 1) {
            $sql = "UPDATE conta SET saldo = (saldo - :amount) WHERE id = :id";
        }

        $sql = $pdo->prepare($sql);
        $sql->bindValue(':amount', $amount);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}