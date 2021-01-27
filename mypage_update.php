<?php
session_start();
$dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'root', 'rootroot');
$sql = 'update login_mypage set name= ?, mail = ?, password = ?, comments = ? where id = ?';

$stmt = $dbh->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['password']);
$stmt->bindValue(4, $_POST['comments']);
$stmt->bindValue(5, $_SESSION['id']);

$stmt->execute();

$stmt = $dbh->prepare("select * from login_mypage where mail = ? && password = ?");
$stmt->bindValue(1, $_POST["mail"]);
$stmt->bindValue(2, $_POST["password"]);

$stmt->execute();

$dbh = NULL;

while($row = $stmt->fetch()){
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['picture'] = $row['picture'];
    $_SESSION['comments'] = $row['comments'];
}

header('Location:mypage.php');
?>