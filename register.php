<?php

$dsn = 'mysql:host=localhost;dbname=co_968_it_99sv_coco_com';
$user = 'co-968.it.99sv-c';
$password = 'yVU6yus';

$pdo = new PDO($dsn, $user, $password);

$status = "none";
$pass = $_POST["password"];
$username = $_POST["username"];
if(!empty($_POST["username"]) && !empty($_POST["password"])){

  //ユーザ入力を使用するのでプリペアドステートメントを使用
  $stmt = $pdo->prepare("INSERT INTO users(username,password) VALUES(?,?)");
  $stmt->execute(array($username, "2323"));

  if($stmt->execute()) {
    $status = "ok";
  } else {
    //既に存在するユーザ名だった場合INSERTに失敗する
    $status = "failed";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>新規登録</title>
  </head>
  <body>
    <h1>新規登録</h1>
    <?php if($status == "ok"): ?>
      <p>登録完了</p>
    <?php elseif($status == "failed"): ?>
      <p>エラー：既に存在するユーザ名です。</p>
    <?php else: ?>
      <form method="POST" action="register.php">
        ユーザ名：<input type="text" name="username" />
        パスワード：<input type="password" name="password" />
        <input type="submit" value="登録" />
      </form>
    <?php endif; ?>
  </body>
</html>