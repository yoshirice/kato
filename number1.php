<html>
<head>
<title>���e�ԍ����Z�b�g�y�[�W</title>
</head>
<body>
<?php
$filename = 'number.txt';
echo '���̃t�@�C���̓~�b�V����2-2�Ŏg�p����t�@�C���ł��B���e�ԍ������Z�b�g���܂��B<br/>';
if (is_writable($filename)) {
	echo $filename.'�͏������݉\�ł��B<br/>';
} else {
	echo $filename."�͏������ݕs�\�ł��B<br/>";
}
$fp=fopen($filename,"w");
fwrite($fp,'0');
fclose($fp);

echo $filename.'��0���������݂܂����B'
?>
<form>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="�߂�">
</form>
</body>
</html>