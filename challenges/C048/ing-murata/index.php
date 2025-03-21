<?php
//タダになるまでの値段を求める
$input = explode(' ', fgets(STDIN));
//価格
$price = intval($input[0]);
//割引率
$discount  = intval($input[1]);
$percentage = 1 - $n / 100;

$sum = $price;

while (true) {
    $price = floor($price * $percentage);
    if ($price == 0) {
        break;
    }
    //０になるまで値段を足し続ける
    $sum += $price;
}
echo $sum;
