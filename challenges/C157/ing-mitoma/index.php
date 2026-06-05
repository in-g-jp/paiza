<?php
// ここに回答を実装してください
$_ = (int)trim(fgets(STDIN));

$totalFlowerCount = explode(" ", (trim(fgets(STDIN))));

$differentFlowerSeeds = array_unique($totalFlowerCount);
var_dump($differentFlowerSeeds);
$totalDifferentSeed = count($differentFlowerSeeds);

echo $totalDifferentSeed;
