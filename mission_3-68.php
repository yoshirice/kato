<?php

$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

//MySQL�f�[�^�x�[�X�̃e�[�u�������
$sql = 'CREATE TABLE users2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username CHAR(128),
	name CHAR(128),
	password CHAR(128)
	)';


$result = $pdo->query($sql);
?>
