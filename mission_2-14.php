<?php


//UPDATE文を実行


$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

$sql = "delete from kato2 where id = :id";

$stmt = $pdo->prepare($sql);

$params = array(':id' => 4);

$stmt->execute($params);

echo '削除完了しました';


?>
