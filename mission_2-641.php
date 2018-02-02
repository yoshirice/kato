
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2-4.php</title>
</head>
<body>
<?php
$k = $_POST['k'];
$delnumber = $_POST['delnumber']+1;
$filename = 'mission_2-2.txt';
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
			$filearray[$k] = "";
			
			$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む

			foreach ($filearray as $a){
			fputs($fp,$a);
			}//foreachの括弧
			fclose($fp);

			echo "投稿番号".$delnumber."番の内容を削除しました。</br>";
			
		

?>
<form method="post" action="mission_2-641.php">
<input type="hidden" name="k" value="<?php echo $k1; ?>" />　
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/mission_2-64.html'" value="続けて削除する">
</form>
</body>
</html>

