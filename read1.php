<?php
//ファイルを読み込む
$data=file_get_contents('data/data1.txt');

//読み込んだものをうブラウザに表示する。
echo nl2br($data);
?>