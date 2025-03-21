<?php
// 箱の個数
$N = intval(fgets(STDIN));
// それぞれの箱の水深
$line = trim(fgets(STDIN));
$d = explode(' ', $line);

$waterDepths = array_map('intval', $d);
$average = array_sum($waterDepths) / $N;
// 小数点以下は切り上げ
echo ceil($average);
