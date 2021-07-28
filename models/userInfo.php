<?php
    #require '../config.php';

    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        $id = $_SESSION['account-id'];

        $sql = "SELECT * FROM conta WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $accountHolder = $data['titula'];
            $branch = $data['agencia'];
            $accountNumber = intval($data['conta'] / 10);
            $accountNumberDigit = $data['conta'] % 10;
            $balance = $data['saldo'];
        }
    }

    
?>