<?php


//$dsn = '�f�[�^�x�[�X��';
//$user = '���[�U�[��';
//$password = '�p�X���[�h';

//$pdo = new PDO($dsn, $user, $password);

$db['host'] = "localhost";  // DB�T�[�o��URL
$db['user'] = "co-968.it.99sv-c";  // ���[�U�[��
$db['pass'] = "yVU6yus";  // ���[�U�[���̃p�X���[�h
$db['dbname'] = "co_968_it_99sv_coco_com";  // �f�[�^�x�[�X��

$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);

$pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



$sql = 'SELECT*FROM users2';//�N�G��

$result = $pdo->query($sql);//���s�E���ʎ擾

//�o��

//$password = "aa";
//if (strcmp($password, $row['pass']) == 0) {
//echo "�p�X���[�h��v";
//} else {
//echo "�p�X���[�h�s��v";
//echo "</br>�p�X���[�h��".$password."</br>";
//$sql_result = array();
//$result = mysql_query($sql);
//while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
//    $sql_result[] = $row;
//}
//print "<pre>";
//print_r($sql_result);
//print "</pre>";
//}

echo "id,���O,���[�U�[ID,�p�X���[�h</br>";
foreach ($result as $row) {

echo $row['id'].',';

echo $row['name'].',';

echo $row['username'].',';

echo $row['password'];

echo '<br>';

}


?>
