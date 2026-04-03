<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input = explode(' ', fgets(STDIN));
$N = (int)$input[0];
$level = (int)$input[1];
for ($i = 0; $i < $N; $i++) {
    $enemylevel = (int)trim(fgets(STDIN));
    if ($level > $enemylevel) {
        $level = $level + floor($enemylevel / 2);
    } elseif ($level < $enemylevel) {
        $level = floor($level / 2);
    }
}
echo $level;
