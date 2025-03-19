<?php
// 桶の底面積
$S = intval(fgets(STDIN));
// それぞれの板の高さ
$line = trim(fgets(STDIN));
$A = explode(' ', $line);

$boardHeights = array_map(fn($boardHeights) => (int) $boardHeights, $A);

// 一番背の低い板の高さを取得
$minHeight = min($boardHeights);

echo $S * $minHeight;
