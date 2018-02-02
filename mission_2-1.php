
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_2-1.txt';
//echo $filename;

$fp = fopen($filename, "a");

fwrite($fp, $_POST['information']."\n");


echo 'テキストの中身:';
echo file_get_contents("mission_2-1.txt");


fclose($fp);
?>
</body>
</html>

