<?php


//UPDATE�������s


$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

$sql = "UPDATE kato2 SET name = :name WHERE id = :id";

$stmt = $pdo->prepare($sql);

$params = array(':name' => 'miyata', 'id' => '5');

$stmt->execute($params);

echo '�X�V�������܂���';


?>
