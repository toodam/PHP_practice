<?php

$a = "<p>こんにちは。<p>";
// 文字列から HTML タグを取り除いて出力
echo strip_tags($a);
echo "\n";

$fruit = array("orrange", "apple");

// 要素を配列の最後に追加する
array_push($fruit, "melon", "grape");

$a = array(1, 3);
$b = array(2, 4);
// 配列同士を結合
$c = array_merge($a, $b);

echo print_r($c);

// 現在のタイムスタンプを取得
$today = time();
// 明日の０時のタイムスタンプを取得
$tomorrow = mktime(0, 0, 0, 4, 24, 2020);

$dif = $tomorrow - $today;

echo "明日までに後" . "$dif" . "秒です。";
echo "\n";

// 現在の日時を取得
$now = date("Y/m/d H:i:s");

echo $now;


?>