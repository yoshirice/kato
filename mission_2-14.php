<?php


//UPDATE�������s


$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

$sql = "delete from kato2 where id = :id";

$stmt = $pdo->prepare($sql);

$params = array(':id' => 4);

$stmt->execute($params);

echo '�폜�������܂���';


?>
