<?php

$dsn = '�f�[�^�x�[�X��';
$user = '���[�U�[��';
$password = '�p�X���[�h';

$pdo = new PDO($dsn, $user, $password);

$sql = 'SHOW TABLES';

$result = $pdo->query($sql);

foreach ($result as $row) {

echo $row[0];

echo '<br>';

}


?>
