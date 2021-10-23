<?php
    session_start();
    require 'models/User.php';
    require 'models/Transaction.php';
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Bank</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="icon" href="assets/images/favicon_by_logaster.png" sizes="32x32">
    <script src="https://kit.fontawesome.com/10b84a3888.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
    if(isset($_SESSION['account-id']) && !empty($_SESSION['account-id'])){
        include 'views/homeTemplate.php';
    } else {
        include 'views/loginTemplate.php';
    }
?>

</body>
</html>