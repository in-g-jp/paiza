<?php
$N = (int)fgets(STDIN);
$X = (int)fgets(STDIN);
$total_point = 0;
for ($i = 0; $i < 7; $i++) {
    $total_point += $N;
    $N = floor($N * $X / 100);
}
echo $total_point;
