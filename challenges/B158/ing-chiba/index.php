<?php

// 正方形の辺の長さ
$N = intval(trim(fgets(STDIN)));

// 置かれている石の数
$total = 0;

while ($line = fgets(STDIN)) {
    $numbers = array_map('intval', explode(' ', trim($line)));
    $total += array_sum($numbers);
}

// 置かれている石の数から本来おくべき石の数を引く

// 中心の石の数
$center = ceil($N / 2);

// 外側の石の数
$outer = $N;

// 外側（1）から石の数を数えていく
for ($i = 1; $i <= $center; $i++) {
    $inner = $outer - 2;

    // 現在数えている数 * (現在の辺の長さの2乗 - 内側の辺の長さの2乗)
    $sum = $i * ($outer ** 2 - $inner ** 2);

    // 本来おくべき石の数を引く
    $total -= $sum;

    // 外側の石の数を内側の石の数にする
    $outer -= 2;
}

// 一番中心の数だけ引けないので最後に引く   
$total -= $center;

print($total);
