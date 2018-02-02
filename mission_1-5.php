
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php
$filename = 'mission_1-5.txt';
//echo $filename;

$fp = fopen($filename, 'w');

fwrite($fp, $_POST['information']);


	

fclose($fp);
?>
</body>
</html>

