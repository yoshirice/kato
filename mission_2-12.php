<?php


$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);



$sql = 'SELECT*FROM kato2';//�N�G��

$result = $pdo->query($sql);//���s�E���ʎ擾

//�o��

foreach ($result as $row) {

echo $row['id'].',';

echo $row['name'].',';

echo $row['age'].',';

echo $row['height'].'<br>';

}


?>
