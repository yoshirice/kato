<title>PHPを楽しもう！</title>
<!- titleはページのタイトルなどの情報を示す ->
<h1>改行の練習</h1>
<!- hは見出し ->
<!- pで段落分けをしている ->
<p>宇宙の中に太陽系があり、その中に地球があります。<br/>そして私はその地球の中の日本という小さな国に住んでいます。<br/></p>
<p>りんご<br/>みかん<br/>バナナ<br/>メロン<br/><p/>

<?php
//brの後ろにスペースがある場合
echo "Kato Yoshiyuki<br />";
echo '加藤慶幸<br />';
//brの後ろにスペースがない場合&ダブルクォーテーションで囲ってみる
echo "ワコーレエレガンス<br/>";
echo "馬橋<br/>";
$a = '入口';
echo "エンジニアの{$a}<br/>";//変数と文字列の表示の仕方�@
$b = "Kirby";
echo $b." of super star!";//変数と文字列の表示の仕方�A（こっちの方が主流）
?>