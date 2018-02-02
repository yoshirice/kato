<?php

$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

//MySQLデータベースのテーブルを作る
$sql = 'CREATE TABLE users2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username CHAR(128),
	name CHAR(128),
	password CHAR(128)
	)';


$result = $pdo->query($sql);
?>
