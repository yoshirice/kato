<?php
//DBにMysql、データベース名・testを指定。
$dsn = 'データベース名';

//DBに接続するためのユーザー名・パスワードを設定
$user = 'ユーザー名';
$password = 'パスワード';

//データーベースに接続
    $pdo = new PDO($dsn, $user, $password);

?>