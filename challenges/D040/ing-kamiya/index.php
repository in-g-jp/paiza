<?php
// ここに回答を実装してください
$sum = 0;
while ($input = fgets(STDIN)) {
    // 降水確率が30%以下のときはカウントする
    if ($input <= 30) {
        $sum++;
    }
}
echo $sum;
