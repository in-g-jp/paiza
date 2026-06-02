<?php
// ここに回答を実装してください
const BID_INCREMENT_A = 10;
const BID_INCREMENT_B = 1000;

[$initialPrice, $budgetPersonA, $budgetPersonB] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$currentTotalPrice = $initialPrice;
$finalPurchaser = null;

while (true) {
  $nextPriceA = $currentTotalPrice + BID_INCREMENT_A;
  if ($nextPriceA > $budgetPersonA) {
    $finalPurchaser = "B";
    break;
  }

  $currentTotalPrice = $nextPriceA;

  $nextPriceB = $currentTotalPrice + BID_INCREMENT_B;
  if ($nextPriceB > $budgetPersonB) {
    $finalPurchaser = "A";
    break;
  }

  $currentTotalPrice = $nextPriceB;
}

echo "$finalPurchaser $currentTotalPrice";
