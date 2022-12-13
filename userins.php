<?php
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
$sql = "SELECT * FROM user WHERE user_mail=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
$ps->execute();
$mailcheck = $ps->fetchAll();
if($mailcheck > 0){?>
    <script type='text/javascript'>
        alert('既に同じメールアドレスが使用されています');
        location.href = 'touroku.php'
    </script> 
<?php 
}else{
$sql = "INSERT INTO user(user_familyname, user_firstname, user_address, user_mail, user_password) VALUES(?,?,?,?,?)";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['familyname'],PDO::PARAM_STR);
$ps->bindValue(2,$_POST['firstname'],PDO::PARAM_STR);
$ps->bindValue(3,$_POST['address'],PDO::PARAM_STR);
$ps->bindValue(4,$_POST['mail'],PDO::PARAM_STR);
$ps->bindValue(5,$_POST['pass'],PDO::PARAM_STR);
$ps->execute();

header('Location: login.php');
}
?>