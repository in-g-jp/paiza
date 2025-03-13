<?php
// ここに回答を実装してください
$inputs = explode(' ', fgets(STDIN));
$count = intval($inputs[0]);

// 自分のレベル
$myLevel = intval($inputs[1]);

while ($enemyLevel = intval(fgets(STDIN))) {
    // 勝った場合は敵のレベルの半分がもらえる
    $victory = floor($enemyLevel / 2);
    // 負けた場合は自分のレベルが半分になる
    $lose = floor($myLevel / 2);

    if ($myLevel > $enemyLevel) {
        $myLevel += $victory;
    }
    if ($myLevel < $enemyLevel) {
        $myLevel = $lose;
    }
}
echo $myLevel;
