<?php
$input = explode(' ', fgets(STDIN));
$price = intval($input[0]);
$discount  = intval($input[1]);
$percentage = 1 - $n / 100;

$sum = $price;

while (true) {
    $price = floor($price * $percentage);
    if ($price == 0) {
        break;
    }
    $sum += $price;
}
echo $sum;
