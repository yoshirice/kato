<?php

$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

//MySQLデータベースのテーブルを作る
$sql = 'CREATE TABLE kato2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name CHAR(128),
	age INT(3),
	height INT(3)
	)';


$result = $pdo->query($sql);
?>
