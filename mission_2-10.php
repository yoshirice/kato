<?php

$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

$sql = 'show create table kato';

$result = $pdo->query($sql);

foreach ($result as $row) {

echo $row[0];

echo '<br>';

}


?>
