<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Caixa Eletrônico</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, inicial-scale=1.0"/>
</head>
<body>
    <?php
    if(isset($SESSION['user-id']) && !empty($SESSION['user-id'])){
        include 'view/homeTemplate.php';
    } else {
        include 'view/loginTemplate.php';
    }
    ?>
</body>
</html>