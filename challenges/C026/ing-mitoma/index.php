<?php
// ここに回答を実装してください
$rules = array_map("intval", explode(" ", trim(fgets(STDIN))));
$N = $rules[0];
$S = $rules[1];
$P = $rules[2];
$SugarAmountMin = $S - $P;
$SugarAmountMax = $S + $P;
$maxWeight = -1;
$bestCarrot = "not found";

for ($i = 1; $i <= $N; $i++) {
  [$weight, $sugar] = array_map("intval", explode(" ", trim(fgets(STDIN))));

  if ($weight > $maxWeight && $sugar >= $SugarAmountMin && $sugar <= $SugarAmountMax) {
    $maxWeight = $weight;
    $bestCarrot = $i;
  }
}

echo $bestCarrot;
