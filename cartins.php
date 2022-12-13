<?php
    $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
    session_start();
    if(isset($_SESSION['userid'])){
        $sql = "INSERT INTO cart(user_id,item_id,cart_itemsize,cart_sum) VALUES(?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
        $ps->bindValue(2,$_POST['itemid'],PDO::PARAM_INT);
        $ps->bindValue(3,$_POST['size'],PDO::PARAM_STR);
        $ps->bindValue(4,$_POST['quantity'],PDO::PARAM_INT);
        $ps->execute();
        header('Location: cart.php');
    }else{
        header('Location: login.php');
    }
?>