// <?php

// // 引数に数値を指定して実行すると、数値を2倍にして返す関数
// function double($value){
//     return $value * 2;
// }

// // $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数
// function sum($a, $b){
//     return $a + $b;
// }

// .$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数

function multiply($arr){
    $sum = 1;
    foreach($arr as $value){
        $sum *= $value;
    }
    return $sum;
}

echo multiply(array(1,3,5,7,9));
