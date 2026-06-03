<?php
// ここに回答を実装してください
$totalCarCount = (int)trim(fgets(STDIN));
$locationOfCars = [];
for ($i = 0; $i < $totalCarCount; $i++) {
  $locationOfCars[] = (int)trim(fgets(STDIN));
}
$carMaxNumber = max($locationOfCars);
$totalLoopCount = 0;
$nextCarNumber = 1;

while (!empty($locationOfCars)) {
  $topCarNumber = array_shift($locationOfCars);

  if ($topCarNumber === $nextCarNumber) {
    $nextCarNumber++;
    continue;
  }
  if ($topCarNumber === $carMaxNumber) {
    $totalLoopCount++;
    $locationOfCars[] = $topCarNumber;
    continue;
  }
  $locationOfCars[] = $topCarNumber;
}

echo $totalLoopCount;
