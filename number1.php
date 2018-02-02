<html>
<head>
<title>投稿番号リセットページ</title>
</head>
<body>
<?php
$filename = 'number.txt';
echo 'このファイルはミッション2-2で使用するファイルです。投稿番号をリセットします。<br/>';
if (is_writable($filename)) {
	echo $filename.'は書き込み可能です。<br/>';
} else {
	echo $filename."は書き込み不可能です。<br/>";
}
$fp=fopen($filename,"w");
fwrite($fp,'0');
fclose($fp);

echo $filename.'に0を書き込みました。'
?>
<form>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</form>
</body>
</html>