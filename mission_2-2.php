
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_2-2.txt';
$numberfile = 'number.txt';//カウント数を記録するファイル
$today = date("Y-m-d H:i:s a");
$fp = fopen($filename, "a");
$fnp = fopen($numberfile,"r+");//カウント数を記録するファイルの読み込み
$lengh = 8;//文字列の桁数

if($fnp){
	$number = fgets($fnp,$lengh);//ファイルから文字列取得
	$number++;
	rewind($fnp);//ファイルポインタの位置を先頭に戻す
	fwrite($fnp,$number);//ファイルにカウント数を書き込み
	flock($fnp,LOCK_UN);//ファイルをロック
}
fclose($fnp);
$str = ($number . '<>' . $_POST['information'] . '<>' . $_POST['comments'] . '<>' .$today);
fwrite($fp,"$str");


echo 'テキストの中身:';
echo file_get_contents("mission_2-2.txt");
echo "</br>";

fclose($fp);
?>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</body>
</html>

