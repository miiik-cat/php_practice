<?php
//$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみ
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

echo $array_month[7];

echo "\n";

//$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう
$a = 2;
$b = 7;

echo $a+$b;

echo "\n";

//$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
//$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう
$hello = "Hello, ";
$name = "miyuki";
$world = "‘s World!";

echo $hello.$name.$world;

echo "\n";

//$tech_boostに “tech “という文字列が代入されています。
//複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう

// .= は変数に文字列を連結する

$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;

echo "\n";