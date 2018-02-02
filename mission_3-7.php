<!DOCYTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>掲示板</title>
</head>
<body>
<?php
	
	if(empty($_COOKIE["NAME2"])) {
	// リダイレクトを実行
	header( "Location: login.php" ) ;
	} else {
//session_start();
//$name2 = $_GET['name'];
$sessionname = $_COOKIE["NAME2"];
echo "ようこそ！".$sessionname."様</br>";
}
?>
<form  method ="post" action  ="mission_3-7.php">
    名前:<input type="text" value = "<?php echo $sessionname; ?>" disabled="disabled" >
	 <input type="hidden" name="name" value = "<?php echo $sessionname; ?>" >
<br>
コメント:
<textarea name="comments" cols="40" rows="4" maxlength="150" ></textarea>
<br>
ファイル添付:
<input type="file" name="image">
<br>
     <input type="submit" value="送信"> <input type="button" onclick="location.href='http://co-968.it.99sv-coco.com/'" value="戻る">
</form>
<?php

//Mysql接続
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';

$pdo = new PDO($dsn, $user, $password);

$userid = $_COOKIE["userid"];
$comments = $_POST['comments'];
$today = date("Y/m/d H:i:s a");
//データ挿入
$st = $pdo->prepare("INSERT INTO keiziban2(name,userid,comment,day) VALUES(?,?,?,?)");

$st->execute(array($sessionname,$userid,$comments,$today));

//データ表示
$sql = 'SELECT*FROM keiziban2';//クエリ

$result = $pdo->query($sql);//実行・結果取得

if(isset($comments)) {
	foreach ($result as $row) {

	echo $row['id'].':';

	echo $row['name'].' ';

	echo $row['day'].' ';

	echo "ID:".$row['userid']."</br>";

	echo $row['comment'];

	echo '<br>';

	}
}













//mission_2-3.phpもどき
//if(@$_POST['name']&&@$_POST['comments']){
//	$filename = 'mission_2-2.txt';
//	$numberfile = 'number.txt';//カウント数を記録するファイル
//	$today = date("Y-m-d H:i:s a");
//	$fp = fopen($filename, "a");
//	$fnp = fopen($numberfile,"r+");//カウント数を記録するファイルの読み込み
//	$lengh = 8;//文字列の桁数
//
//	if($fnp){
//		$number = fgets($fnp,$lengh);//ファイルから文字列取得
//		$number++;
//		rewind($fnp);//ファイルポインタの位置を先頭に戻す
//		fwrite($fnp,$number);//ファイルにカウント数を書き込み
//		flock($fnp,LOCK_UN);//ファイルをロック
//	}
//	fclose($fnp);
//	$str = ($number . '<>' . $_POST['name'] . '<>' . $_POST['comments'] . '<>' . $today. "\n");
//	fwrite($fp,"$str");
//	fclose($fp);
//	$lines = file($filename);//このタイミングで定義するのが大事
//	//配列のデータをループで処理
//	foreach((array)$lines as $line){
//		$element = explode("<>",$line);
		//分割して各要素を取得
//		echo "<br/>".$element[0]."<br/>";
//		echo $element[1]."<br/>";
//		echo $element[2]."<br/>";
//		echo $element[3]."<br/>";
//	}
//
//}
?>
</body>
</html>