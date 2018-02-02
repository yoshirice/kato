<?php


//$dsn = 'データベース名';
//$user = 'ユーザー名';
//$password = 'パスワード';

//$pdo = new PDO($dsn, $user, $password);

$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "co-968.it.99sv-c";  // ユーザー名
$db['pass'] = "yVU6yus";  // ユーザー名のパスワード
$db['dbname'] = "co_968_it_99sv_coco_com";  // データベース名

$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);

$pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



$sql = 'SELECT*FROM users2';//クエリ

$result = $pdo->query($sql);//実行・結果取得

//出力

//$password = "aa";
//if (strcmp($password, $row['pass']) == 0) {
//echo "パスワード一致";
//} else {
//echo "パスワード不一致";
//echo "</br>パスワードは".$password."</br>";
//$sql_result = array();
//$result = mysql_query($sql);
//while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
//    $sql_result[] = $row;
//}
//print "<pre>";
//print_r($sql_result);
//print "</pre>";
//}

echo "id,名前,ユーザーID,パスワード</br>";
foreach ($result as $row) {

echo $row['id'].',';

echo $row['name'].',';

echo $row['username'].',';

echo $row['password'];

echo '<br>';

}


?>
