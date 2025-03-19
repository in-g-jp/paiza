<?php
$input = fgets(STDIN);
//上限の身長
$upperLimit = 200;
//下限の身長
$lowerLimit = 0;

while ($line = fgets(STDIN)) {
    $lines = explode(' ', $line);
    //leかgeか
    $judge = trim($lines[0]);
    //入力された身長
    $height = floatval($lines[1]);


    //入力された子供より身長が小さい時
    if ($judge === "le") {
        if ($upperLimit > $height) {
            $upperLimit = $height;
        }
    }

    //入力された子供より身長が大きい時
    if ($judge === "ge") {
        if ($lowerLimit < $height) {
            $lowerLimit = $height;
        }
    }
}

//.0をつける
$lowerLimit = number_format($lowerLimit, 1, '.', '');
$upperLimit = number_format($upperLimit, 1, '.', '');

echo "$lowerLimit $upperLimit";
