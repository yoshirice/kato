
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2-64.php</title>
</head>
<body>
<?php
$filename = 'mission_2-2.txt';
$delnumber = $_POST['delnumber'];
$password = $_POST['password'];
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
$delnumber2 = $delnumber-1;
if(-1<$delnumber2){
	for($k = 0;$k<count($filearray);++$k){//配列の数まで$kが行きつくまで
		$delData = explode("<>",$filearray[$k]);//$kの時の配列のデータを分割
		$delpassword = trim($delData[4]);//パスワードの空白を取り除く(なぜか入っていた)
		if($delData[0] == $delnumber&&strcmp($password, $delpassword) == 0){//削除番号と投稿番号、パスワードが一致しているかどうかを比較
			echo "【".$delData[0].$delData[1].$delData[2].$delData[3].$delData[4]."】</br>";//←削除する前の情報</br>";//削除前の内容を表示
			//echo "削除する番号は".$delpassword."です。</br>";
			//echo "入力したパスワードは".$password."です。</br>";
			$delpassword2 = $delpassword;
			//if (strcmp($password, $delpassword) == 0) {
  			 // 	echo "同じ文字列です\n";
			//} else {
			 //  	 echo "異なる文字列です\n";
			//}
			echo "以上の内容を本当に削除しますか？";
			//array_splice($delData,1);//投稿番号以外（投稿番号以降）を削除
			//echo "投稿番号".$delnumber."番の内容を削除しました。</br>";
			//echo "【".$delData[0].$delData[1].$delData[2].$delData[3]."】←削除した後の情報</br>";//削除後の内容を表示
			//$filearray[$k] = "";
			$l = $k+1;
			$k1 = $k;
			//$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む

			//foreach ($filearray as $a){
			//fputs($fp,$a);
			//}foreachの括弧

			$k = count($filearray)+1;//$kの値がcount($filearray)を上回るように設定し、for文を終了させる
		}
	
	}//forの括弧

	if($l){
	$r = $l;
	} else {
		echo '<script type="text/javascript">';
		echo 'alert("投稿番号が違います。");';
		echo 'history.back();';
		echo '</script>';
	}

	if(strcmp($password, $delpassword2) !== 0) {
			echo '<script type="text/javascript">';
			echo 'alert("パスワードが違います。");';
			echo 'history.back();';
			echo '</script>';
	}

} else {
echo <<<EOM
<script type="text/javascript">
  alert( "投稿番号が存在しません。ホームページに戻ります。" );
  location.href = 'http://co-968.it.99sv-coco.com/';
</script>
EOM;
}
?>
<form method="post" action="mission_2-641.php">
<input type="hidden" name="k" value="<?php echo $k1; ?>" />　
<input type="hidden" name="delnumber" value="<?php echo $l; ?>" />　
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="いいえ"> <input type="submit" value="はい">
</form>
</body>
</html>

