<?php
    session_start();
    require 'config.php';

    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        include 'views/homeTemplate.php';
    } else {
        include 'views/loginTemplate.php';
    }
?>
