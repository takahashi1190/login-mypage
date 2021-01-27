<?php
$dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'root', 'rootroot');
$stmt = $dbh->prepare('insert into login_mypage(name,mail,password,picture,comments) 
values(?,?,?,?,?)');

$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['path_filename']);
$stmt->bindValue(5,$_POST['comments']);

$stmt->execute();
$dbh = NULL;
?>