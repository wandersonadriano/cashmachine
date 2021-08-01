<?php

class User{

public function showAccountData(PDO $pdo){
    $accountData = [];
    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        $id = $_SESSION['account-id'];

        $sql = "SELECT * FROM conta WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $accountData = [
                'id' => $data['id'],
                'accountHolder' => $data['titula'],
                'branch' => $data['agencia'],
                'accountNumber' => intval($data['conta'] / 10),
                'accountNumberDigit' => intval($data['conta'] % 10),
                'balance' => $data['saldo']
            ];
        }
        return $accountData;
        }
    }   
}