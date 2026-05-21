<?php
$N = (int)trim(fgets(STDIN));
[$K, $M] = array_map('intval', explode(" ", trim(fgets(STDIN))));
$eachCosts = array_map('intval', explode(" ", trim(fgets(STDIN)))); //各回の会計をまとめて格納した配列

$countSum = 0; //会計の合計
$countForSilver = 0; //条件を満たす会計の回数

for ($i = 0; $i < $N; $i++) {
  if ($eachCosts[$i] >= $K) {
    $countForSilver++;
  }
  $countSum += $eachCosts[$i];
}

if ($countForSilver >= 3 && $countSum >= $M) {
  echo "silver";
} else {
  echo "bronze";
}
