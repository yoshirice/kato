<!DOCYTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>編集用フォーム</title>
</head>
<body>
<?php 
$namee = $_POST['name3'];
$efn = $_POST['editfilenumber'];
$comment = $_POST['comment3'];
$editnumber = $_POST['editnumber'];
$editpassword = $_POST['editpassword'];
?>


<form method ="post" action ="mission_2-52.php">
名前:<input type="text" name="name2" value = "<?php echo htmlspecialchars($namee, ENT_QUOTES, "UTF-8"); ?>" required>
<br>
コメント:
<textarea name="comment2" cols="40" rows="4" maxlength="150" required ><?php echo htmlspecialchars($comment, ENT_QUOTES, "UTF-8"); ?></textarea>
<br>
<input type="hidden" name="editfilenumber2" value="<?php echo htmlspecialchars($efn, ENT_QUOTES, "UTF-8"); ?>">
<input type="hidden" name="editnumber2" value="<?php echo htmlspecialchars($editnumber, ENT_QUOTES, "UTF-8"); ?>">
<input type="hidden" name="editpassword" value="<?php echo htmlspecialchars($editpassword, ENT_QUOTES, "UTF-8"); ?>">
<input type="submit" value="編集完了">
</form>
</body>
</html>