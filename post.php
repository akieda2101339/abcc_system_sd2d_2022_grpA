<?php
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM user WHERE user_mail=? limit 1";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
$ps->execute();
$mailcheck = $ps->fetch();
if($mailcheck > 0){
    echo "登録済みメールアドレス";
}else{
    echo "未登録メールアドレス";
}
?>