<?php

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
  if($max_number < $a){
   $max_number = $a;
  }
 }
 return $max_number;
}

$b = array(-1, 1, 3, 6, 4, 6, 9, 2);

echo max_array($b);

 
 
 
 
 