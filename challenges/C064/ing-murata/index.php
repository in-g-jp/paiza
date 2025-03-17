<?php
$inputs = explode(' ', trim(fgets(STDIN)));

//食品の量
$M = intval($inputs[0]);

// カロリー情報を取得
$calorie = [];
for ($i = 0; $i < $M; $i++) {
    $line = fgets(STDIN);
    $calorie[] = intval($line);
}

// 食品ごとの量を読み取り、カロリー計算
while (($line = fgets(STDIN))) {
    $amounts = explode(' ', trim($line));
    $sum = 0;
    //商品の数だけ繰り返し。カロリーは100gあたりなので100で割る。切り捨ての指定あり。
    for ($q = 0; $q < $M; $q++) {
        $sum += floor(intval($amounts[$q]) * $calorie[$q] / 100);
    }

    echo $sum . "\n";
}
