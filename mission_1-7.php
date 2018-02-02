
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_1-6.txt';

$lines = file($filename);

?>
<u1>

<?php 
//is_array関数で配列かどうか判定する
if(is_array($lines)) {
//配列だったらforeach関数でループ処理
foreach ($lines as $line) {
 echo $line;
 echo "<br/>";
}
//配列ではなかったらエラーメッセージを表示
} else {
 echo '配列ではありません。';
}
 ?>
</u1>
</body>
</html>

