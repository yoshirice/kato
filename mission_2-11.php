<?php


$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

$st = $pdo->prepare("INSERT INTO users(name,username,password) VALUES(?,?,?)");

$st->execute(array("kato yoshi","22","175"));

?>
