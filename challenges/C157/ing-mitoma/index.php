<?php
// ここに回答を実装してください
$_ = (int)trim(fgets(STDIN));

$flowerCount = explode(" ", trim(fgets(STDIN)));

$uniqueFlowerCounts = array_unique($flowerCount);
$totalDifferentSeed = count($uniqueFlowerCounts);

echo $totalDifferentSeed;
