<?php
// ここに回答を実装してください
$params = array_map("intval", explode(" ", trim(fgets(STDIN))));
$initialPrice = $params[0];
$budgetPersonA = $params[1];
$budgetPersonB = $params[2];
$currentTotalPrice = $initialPrice;
$bidIncrementA = 10;
$bidIncrementB = 1000;
$finalPurchaser = "";

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
