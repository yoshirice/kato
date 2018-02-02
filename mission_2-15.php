
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php


$today = date("Y-m-d H:i:s a");
$lengh = 8;//文字列の桁数

$str = ( '<>'.$_POST['information'] . '<>' . $_POST['comments'] . '<>' .$today);


//Mysql接続
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);
//データ挿入
$st = $pdo->prepare("INSERT INTO data(str) VALUES(?)");

$st->execute(array($str));


echo 'テキストの中身:';
echo $str;
echo "</br>";


?>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</body>
</html>

