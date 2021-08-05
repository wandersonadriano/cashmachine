<?php
   session_start();
   require '../models/Transaction.php';
   require '../config.php';

   $transaction = new Transaction();

   $transaction->addNewTransaction($pdo, $_SESSION['account-id']);

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="POST">
   Valor: <input type="text" name="amount" pattern="[0-9.,]{1,}"/>
   <br/>
   <input type="submit" value="Enviar">
</form>
</body>
</html>
