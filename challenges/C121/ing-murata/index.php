<?php
//Nは商品の個数、Cはカロリー上限
[$N, $C] = explode(' ', fgets(STDIN));
$count = 0;
$sumCalorie = 0;
while (($line = fgets(STDIN))) {
    //商品のランクとカロリー
    [$rank, $calorie] = explode(' ', trim($line));
    $sumCalorie += $calorie;
    //商品のランクが10以下で、カロリーの合計が上限を超えていない場合
    if ($rank <= 10 && $sumCalorie <= $C) {
        $count++;
    }
}
//カロリー上限以内にトップ10の商品を食べ切れた場合
if ($count === 10) {
    echo "Yes";
    return;
}
echo $count;
