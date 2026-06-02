<?php
// ここに回答を実装してください
[$initialPrice, $budgetPersonA, $budgetPersonB] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$currentTotalPrice = $initialPrice;
$bidIncrementA = 10;
$bidIncrementB = 1000;
$finalPurchaser = null;

while (true) {
  $nextPriceA = $currentTotalPrice + $bidIncrementA;
  if ($nextPriceA > $budgetPersonA) {
    $finalPurchaser = "B";
    break;
  }

  $currentTotalPrice = $nextPriceA;

  $nextPriceB = $currentTotalPrice + $bidIncrementB;
  if ($nextPriceB > $budgetPersonB) {
    $finalPurchaser = "A";
    break;
  }

  $currentTotalPrice = $nextPriceB;
}

echo "$finalPurchaser $currentTotalPrice";
