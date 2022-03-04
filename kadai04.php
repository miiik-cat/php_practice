<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($a){
    $result = $a * 2;
    return $result;
}

echo nibai(456);

echo "\n";

//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(2,3)+5;

echo "\n";

//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function kakeru($arr){
    $result = 1;
    foreach($arr as $ar){
        $result = $result * $ar;
    }
    return $result;
}
echo kakeru(array(1,3,5,7,9));

echo "\n";

//下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
    //もし、＄aが$max_numberよりも大きかったら$max_numberに$aを代入する
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}