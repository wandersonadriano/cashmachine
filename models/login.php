<?php
    session_start();
    require '../config.php';

    if(isset($_POST['account_number']) && !empty($_POST['account_number'])){
        $accountNumber = addslashes($_POST['account_number']);
        $accountPassword = md5(addslashes($_POST['account_password']));
        $sql = "SELECT * FROM conta WHERE conta = :account_number AND senha = :account_password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':account_number', $accountNumber);
        $sql->bindValue(':account_password', $accountPassword);
        $sql->execute();

        if($sql->rowCount() == 1){
            $data = $sql->fetch();
            $_SESSION['account-id'] = $data['id'];
        }
    }
    header('Location: ../index.php');
    exit;
?>