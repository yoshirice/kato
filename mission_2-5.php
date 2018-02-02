
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2-5.php</title>
</head>
<body>
<?php
$filename = 'mission_2-2.txt';
$editnumber = $_POST['editnumber'];
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
$editnumber2 = $editnumber-1;
if($editnumber2<count($filearray)&&-1<$editnumber2){
	for($k = 0;$k<count($filearray);++$k){//配列の数まで$kが行きつくまで
		$editData = explode("<>",$filearray[$k]);//$kの時の配列のデータを分割
		if($editData[0] == $editnumber){//編集番号と投稿番号を比較
			echo $editData[0]."</br>".$editData[1]."</br>".$editData[2]."</br>".$editData[3]."</br>";//編集前の内容を表示
			$number = $editData[0];
			$name = $editData[1];
			$comment = $editData[2];
			$editfilenumber = $k;
			//$filearray[$k] = "";
			//$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む
			//foreach ($filearray as $a){
			//fputs($fp,$a);
			//}
			//fclose($fp);
			$k = count($filearray)+1;//$kの値がcount($filearray)を上回るように設定し、for文を終了させる
			echo "以上の内容を編集しますか？";
		} 
		
	}
} else {
echo <<<EOM
<script type="text/javascript">
  alert( "投稿番号が存在しません。ホームページに戻ります。" )
  location.href = 'http://co-968.it.99sv-coco.com/';
</script>
EOM;

}
?>
<form method="post" action="mission_2-51.php">
<input type="hidden" name="editfilenumber" value="<?php echo $editfilenumber; ?>" />　
<input type="hidden" name="editnumber" value="<?php echo $number; ?>" />　
<input type="hidden" name="name3" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>" />
<input type="hidden" name="comment3" value="<?php echo $comment; ?>" />
<input type = "submit" value = "編集する"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/mission_2-5.html'" value="戻る">
<?php
  //header("HTTP/1.1 301 Moved Permanently");
 // header("Location:http://co-968.it.99sv-coco.com/mission_2-51.php");
?>
</form>
</body>
</html>

