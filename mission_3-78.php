<?php

$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

//MySQL�f�[�^�x�[�X�̃e�[�u�������
$sql = 'CREATE TABLE keiziban2
	(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name CHAR(128),
	comment CHAR(128),
	userid CHAR(128),
	day CHAR(128),
	image MEDIUMBLOB
	)';


$result = $pdo->query($sql);
?>
