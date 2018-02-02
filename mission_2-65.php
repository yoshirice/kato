
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2-5.php</title>
</head>
<body>
<?php
$filename = 'mission_2-2.txt';
$editnumber = $_POST['editnumber'];
$password = $_POST['password'];
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
$editnumber2 = $editnumber-1;
if(-1<$editnumber2){
	for($k = 0;$k<count($filearray);++$k){//配列の数まで$kが行きつくまで
		$editData = explode("<>",$filearray[$k]);//$kの時の配列のデータを分割
		$editpassword = trim($editData[4]);//パスワードの空白を取り除く(なぜか入っていた)
		if($editData[0] == $editnumber&&strcmp($password, $editpassword) == 0){//編集番号と投稿番号、パスワードが一致しているかどうかを比較
			echo $editData[0]."</br>".$editData[1]."</br>".$editData[2]."</br>".$editData[3]."</br>";//編集前の内容を表示
			$number = $editData[0];
			$name = $editData[1];
			$comment = $editData[2];
			$editfilenumber = $k;
			$editpassword2 = $editpassword;
			$l = $k+1;
			//$filearray[$k] = "";
			//$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む
			//foreach ($filearray as $a){
			//fputs($fp,$a);
			//}
			//fclose($fp);
			$k = count($filearray)+1;//$kの値がcount($filearray)を上回るように設定し、for文を終了させる
			echo "以上の内容を編集しますか？";
		} 
		
	}//forの括弧

	if(strcmp($password, $editpassword2) !== 0) {
			echo '<script type="text/javascript">';
			echo 'alert("パスワードが違います。");';
			echo 'history.back();';
			echo '</script>';
	}

	if($l) {
	$l2 = $l;
	} else {
			echo '<script type="text/javascript">';
			echo 'alert("投稿番号が違います。");';
			echo 'history.back();';
			echo '</script>';
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
<input type="hidden" name="editpassword" value="<?php echo $editpassword2; ?>" />
<input type = "submit" value = "編集する"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/mission_2-65.html'" value="戻る">
<?php
  //header("HTTP/1.1 301 Moved Permanently");
 // header("Location:http://co-968.it.99sv-coco.com/mission_2-51.php");
?>
</form>
</body>
</html>

