<?php
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

$sql = "DELETE FROM cart WHERE cart_id=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['itemdlt'],PDO::PARAM_INT);
$ps->execute();
header('Location: cart.php');
?>