<?php
echo var_dump($_POST);
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

$sql = "SELECT user_mail FROM user";
$ps = $pdo->prepare($sql);
$ps->execute();
foreach($ps->fetchAll() as $row){
    echo $row;
}
?>