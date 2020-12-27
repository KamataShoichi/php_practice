<?php

//.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function product($value){
    $result = 0;
    $result = $value*2;
    
    return $result;
    
} echo product(100);


//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function f($a,$b){
    $result = 0;
    $result = $a + $b;
    
    return $result;
    
}echo f(10,20);


//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function product2($arr){
    $result = 1;
    foreach($arr as $a){
    $result *= $a;}
    
    return $result;
}echo product2(array(1,3,5,7,9));

//【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
        
    }
    return $max_number;
} echo max_array(array(1,3,5,7,9));

//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
/*
strip_tags
array_push
array_merge
time, mktime
date
*/

$contents = "<p>sample</p>";
$new_contents = strip_tags($contents);
echo $new_contents;

$numbers = array(1,2,3,4,5);
array_push($numbers,6,7,8,9,10);
print_r($numbers);

$a = array(1,3,5,7,9);
$b = array(0,2,4,6,8);
$c = array_merge($a,$b);
var_dump($c);

$time = time(); 
echo $time;

$time2 = mktime(0,0,0,12,27,2020);
echo $time2;

echo date("Y/m/d");
