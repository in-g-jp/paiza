<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input = explode(' ', fgets(STDIN));
$N = $input[0];
$D = $input[1];
for ($i = 2; $i <= $N; $i++) {
    $distance[$i] = (int)trim(fgets(STDIN));
    $total_wid +=  $distance[$i];
}
$total = $D * ($D * $N - $total_wid);

echo $total;
