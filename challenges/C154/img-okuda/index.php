<?php
[$N, $L] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
$prices = array_map('intval', explode(' ', $s));
$max = max($prices);
$total = array_sum($prices);

if ($max >= $L) {
    $total -= floor($max / 2);
}
echo $total;
