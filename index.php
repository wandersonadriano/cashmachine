<?php
    require 'models/User.php';
    require 'models/Transaction.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>$ Bank</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body>

<?php
    session_start();
    require 'config.php';

    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        include 'views/homeTemplate.php';
    } else {
        include 'views/loginTemplate.php';
    }
?>
<script src="https://kit.fontawesome.com/10b84a3888.js" crossorigin="anonymous"></script>
</body>
</html>