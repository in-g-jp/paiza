<?php
$s = trim(fgets(STDIN));
$parts = explode(' ', $s);
$N = intval($parts[0]);
$X = intval($parts[1]);
$Y = intval($parts[2]);
for ($i = 1; $i <= $N; $i++) {
    if (($i % $X === 0) && ($i % $Y === 0)) {
        echo 'AB' . "\n";
        continue;
    }
    if ($i % $X === 0) {
        echo 'A' . "\n";
        continue;
    }
    if ($i % $Y === 0) {
        echo 'B' . "\n";
        continue;
    }
    echo 'N' . "\n";
}
