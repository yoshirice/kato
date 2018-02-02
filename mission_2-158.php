<?php

$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

//MySQLデータベースのテーブルを作る
$sql = 'CREATE TABLE data
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	str CHAR(128)
	)';


$result = $pdo->query($sql);
?>
