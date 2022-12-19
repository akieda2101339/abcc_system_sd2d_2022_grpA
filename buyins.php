<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
$sql = "SELECT * FROM cart WHERE user_id=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
$ps->execute();
foreach($ps->fetchAll() as $row){
    $buyins = "INSERT INTO buys(user_id,item_id,buy_itemsize,buy_sum) VALUES(?,?,?,?)";
    $ps = $pdo->prepare($buyins);
    $ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
    $ps->bindValue(2,$row['item_id'],PDO::PARAM_INT);
    $ps->bindValue(3,$row['cart_itemsize'],PDO::PARAM_STR);
    $ps->bindValue(4,$row['cart_sum'],PDO::PARAM_STR);
    $ps->execute();
    $inventorycheck1 = "SELECT * FROM inventories WHERE item_id=? AND inventory_itemsize=?";
    $ps = $pdo->prepare($inventorycheck1);
    $ps->bindValue(1,$row['item_id'],PDO::PARAM_INT);
    $ps->bindValue(2,$row['cart_itemsize'],PDO::PARAM_STR);
    $ps->execute();
    $inventory = $ps->fetch();
    $inventorycheck2 = "UPDATE inventories SET inventory_sum=? WHERE item_id=? AND inventory_itemsize=?";
    $ps = $pdo->prepare($inventorycheck2);
    $ps->bindValue(1,$inventory['inventory_sum'] - $row['cart_sum'],PDO::PARAM_INT);
    $ps->bindValue(2,$inventory['item_id'],PDO::PARAM_INT);
    $ps->bindValue(3,$inventory['inventory_itemsize'],PDO::PARAM_STR);
    $ps->execute();
}
$sql = "DELETE FROM cart WHERE user_id=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
$ps->execute();
header('Location: buy.php');
?>