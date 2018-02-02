<?php


$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

$st = $pdo->prepare("INSERT INTO users(name,username,password) VALUES(?,?,?)");

$st->execute(array("kato yoshi","22","175"));

?>
