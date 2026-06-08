<?php
// ここに回答を実装してください
$_ = (int)trim(fgets(STDIN));

$flowerCounts = explode(" ", trim(fgets(STDIN)));

$uniqueFlowerCounts = array_unique($flowerCounts);
$uniqueSeedCount = count($uniqueFlowerCounts);

echo $uniqueSeedCount;
