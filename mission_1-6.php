
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_1-6.txt';
//echo $filename;

$fp = fopen($filename, "a");

fwrite($fp, $_POST['information']."\n");

/*
	if (flock($fp, LOCK_EX)) {
		if (fwrite($fp, $_POST['information']) == FALSE) {
			print('ファイル書き込みに失敗しました<br/>');
		} else {
			print($_POST['information'].'をファイルに書き込みました<br/>');
		}
	flock($fp, LOCK_UN);
	} else {
		print('ファイルロックに失敗しました<br/>');
	}
*/

echo 'テキストの中身:';
echo file_get_contents("mission_1-6.txt");


fclose($fp);
?>
</body>
</html>

