<?php

$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

//MySQL�f�[�^�x�[�X�̃e�[�u�������
$sql = 'CREATE TABLE kato2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name CHAR(128),
	age INT(3),
	height INT(3)
	)';


$result = $pdo->query($sql);
?>
