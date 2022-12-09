<?php
session_start();
unset($_SESSION['user']);
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM user WHERE user_mail=? AND user_password=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
$ps->bindValue(2,$_POST['pass'],PDO::PARAM_STR);
$ps->execute();
foreach($ps->fetchAll() as $row){
    $_SESSION['userid'] = $row['user_id'];
    $_SESSION['familyname'] = $row['user_familyname'];
    $_SESSION['firstname'] = $row['user_firstname'];
    $_SESSION['address'] = $row['user_address'];
}
if(isset($_SESSION['userid'])){
    header('Location: acount_test.php');
}else{
    header('Location: login_test.php');
}
?>