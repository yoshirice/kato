
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_2-2.txt';
$today = date("Y-m-d H:i:s a");
$str = ($_POST['editnumber2'] . '<>' . $_POST['name2'] . '<>' . $_POST['comment2'] . '<>' . $today. '<>' .$_POST['editpassword']."\n");
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
$editnumber = $_POST['editnumber2']-1;
$editpassword = $_POST['editpassword'];
array_splice($filearray, $editnumber, 1, $str);
//$filearray[$editfilenumber2] = $str;編集したデータを格納

//print_r($filearray);ファイルの中身を確認
		$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む
			foreach ($filearray as $a){
			fputs($fp,$a);
			}
		fclose($fp);


echo "編集しました。";
?>
<form>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/mission_2-65.html'" value="続けて編集する">
</form>
</body>
</html>

