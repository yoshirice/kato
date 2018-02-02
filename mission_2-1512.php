<?php


$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);



$sql = 'SELECT*FROM data';//クエリ

$result = $pdo->query($sql);//実行・結果取得

//出力

foreach ($result as $row) {

echo $row['id'];

echo $row['str'].'<br>';

}


?>
