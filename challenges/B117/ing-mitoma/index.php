<?php
// ここに回答を実装してください
$totalCarCount = (int)trim(fgets(STDIN));
$carQueue = [];
for ($i = 0; $i < $totalCarCount; $i++) {
  $carQueue[] = (int)trim(fgets(STDIN));
}
$maxCarNumber = max($carQueue);
$totalLoopCount = 0;
$nextCarNumber = 1;

while (!empty($carQueue)) {
  $frontCarNumber = array_shift($carQueue);

  if ($frontCarNumber === $nextCarNumber) {
    $nextCarNumber++;
    continue;
  }
  if ($frontCarNumber === $maxCarNumber) {
    $totalLoopCount++;
    $carQueue[] = $frontCarNumber;
    continue;
  }
  $carQueue[] = $frontCarNumber;
}

echo $totalLoopCount;
