
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php


$name = $_POST['name'];
$pass = $_POST['password'] ;
$newid = uniqid("Y_");

//Mysql接続
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);
//データ挿入
$st = $pdo->prepare("INSERT INTO users2(username,name,password) VALUES(?,?,?)");

$st->execute(array($newid,$name,$pass));



echo $name."</br>ID:".$newid."</br>パスワード:".$pass;
echo "</br>";


?>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</body>
</html>

