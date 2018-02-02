<?php

$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

//MySQLデータベースのテーブルを作る
$sql = 'CREATE TABLE keiziban2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name CHAR(128),
	comment CHAR(128),
	userid CHAR(128),
	day CHAR(128),
	image MEDIUMBLOB
	)';


$result = $pdo->query($sql);
?>
