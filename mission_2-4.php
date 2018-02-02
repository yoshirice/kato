
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2-4.php</title>
</head>
<body>
<?php
$filename = 'mission_2-2.txt';
$delnumber = $_POST['delnumber'];
$filearray = file('mission_2-2.txt');//ファイル全体のデータを配列として読み込む
$delnumber2 = $delnumber-1;
if($delnumber2<count($filearray)&&-1<$delnumber2){
	for($k = 0;$k<count($filearray);++$k){//配列の数まで$kが行きつくまで
		$delData = explode("<>",$filearray[$k]);//$kの時の配列のデータを分割
		if($delData[0] == $delnumber){//削除番号と投稿番号を比較
			//echo "【".$delData[0].$delData[1].$delData[2].$delData[3]."】←削除する前の情報</br>";//削除前の内容を表示
			array_splice($delData,1);//投稿番号以外（投稿番号以降）を削除
			echo "投稿番号".$delnumber."番の内容を削除しました。</br>";
			//echo "【".$delData[0].$delData[1].$delData[2].$delData[3]."】←削除した後の情報</br>";//削除後の内容を表示
			$filearray[$k] = "";
			$l = $k+2;
			$fp=fopen($filename,"w");//mission_2-2.txtに新しい情報を書き込む
			foreach ($filearray as $a){
			fputs($fp,$a);
			}
			fclose($fp);
			$k = count($filearray)+1;//$kの値がcount($filearray)を上回るように設定し、for文を終了させる
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
<form>
<input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/mission_2-4.html'" value="連続で削除する">
</form>
</body>
</html>

