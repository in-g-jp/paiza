<?php
// ここに回答を実装してください
[$carrotCount, $targetSugar, $sugarTolerance] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$sugarAmountMinimum = $targetSugar - $sugarTolerance;
$sugarAmountMaximum = $targetSugar + $sugarTolerance;
$maxWeight = -1;
$bestCarrot = "not found";

for ($i = 1; $i <= $carrotCount; $i++) {
  [$weight, $sugar] = array_map("intval", explode(" ", trim(fgets(STDIN))));

  if ($sugar < $sugarAmountMinimum || $sugar > $sugarAmountMaximum) {
    continue;
  }
  if ($weight <= $maxWeight) {
    continue;
  }
  $maxWeight = $weight;
  $bestCarrot = $i;
}

echo $bestCarrot;
