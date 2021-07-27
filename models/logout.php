<?php
    session_start();
    
    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        unset($_SESSION['account-id']);
    }
    header('Location: ../index.php');
    exit;
?>