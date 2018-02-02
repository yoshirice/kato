<?php


//UPDATE文を実行


$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

$sql = "UPDATE kato2 SET name = :name WHERE id = :id";

$stmt = $pdo->prepare($sql);

$params = array(':name' => 'miyata', 'id' => '5');

$stmt->execute($params);

echo '更新完了しました';


?>
