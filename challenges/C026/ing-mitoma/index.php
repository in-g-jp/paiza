<?php
// ここに回答を実装してください
[$carrotCount, $targetSugar, $sugarTolerance] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$sugarAmountMinimum = $targetSugar - $sugarTolerance;
$sugarAmountMaximum = $targetSugar + $sugarTolerance;
$maxWeight = -1;
$bestCarrot = "not found";

for ($carrotNumber = 1; $carrotNumber <= $carrotCount; $carrotNumber++) {
  [$weight, $sugar] = array_map("intval", explode(" ", trim(fgets(STDIN))));

  if ($sugar < $sugarAmountMinimum || $sugar > $sugarAmountMaximum) {
    continue;
  }
  if ($weight <= $maxWeight) {
    continue;
  }
  $maxWeight = $weight;
  $bestCarrot = $carrotNumber;
}

echo $bestCarrot;
