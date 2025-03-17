<?php
// ここに回答を実装してください
$inputs = explode(' ', fgets(STDIN));
$memberCount = intval($inputs[0]);
$A = intval($inputs[1]);
$B = intval($inputs[2]);

for ($i = 1; $i <= $memberCount; $i++) {
    // Aの倍数
    $multipleOfA = $i % $A === 0;
    // Bの倍数
    $multipleOfB = $i % $B === 0;

    if ($multipleOfA && $multipleOfB) {
        echo "AB\n";
        continue;
    }
    if ($multipleOfA) {
        echo "A\n";
        continue;
    }
    if ($multipleOfB) {
        echo "B\n";
        continue;
    }

    echo "N\n";
}
