<!DOCYTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>入力フォーム</title>
</head>
<body>
<form  method ="post" action  ="mission_2-3.php">
    名前:<input type="text" name="name" required>
<br>
コメント:
<textarea name="comments" cols="40" rows="4" maxlength="150" required></textarea>
<br>
     <input type="submit" value="送信"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</form>
<?php
if(@$_POST['name']&&@$_POST['comments']){
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
	$str = ($number . '<>' . $_POST['name'] . '<>' . $_POST['comments'] . '<>' . $today. "\n");
	fwrite($fp,"$str");
	fclose($fp);
	$lines = file($filename);//このタイミングで定義するのが大事
	//配列のデータをループで処理
	foreach((array)$lines as $line){
		$element = explode("<>",$line);
		//分割して各要素を取得
		echo "<br/>".$element[0]."<br/>";
		echo $element[1]."<br/>";
		echo $element[2]."<br/>";
		echo $element[3]."<br/>";
	}
}
?>
</body>
</html>