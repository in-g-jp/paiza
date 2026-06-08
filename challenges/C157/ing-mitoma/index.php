<?php
// ここに回答を実装してください
$_ = (int)trim(fgets(STDIN));

$flowerCounts = explode(" ", trim(fgets(STDIN)));

$uniqueFlowerCounts = array_unique($flowerCounts);
$totalDifferentSeed = count($uniqueFlowerCounts);

echo $totalDifferentSeed;
