<?php
//$tech_boostに “tech “という文字列が代入されています。
//複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう

// .= は変数に文字列を連結する

$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;