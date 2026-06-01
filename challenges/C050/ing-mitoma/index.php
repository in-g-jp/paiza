<?php
// ここに回答を実装してください
$params = array_map("intval", explode(" ", trim(fgets(STDIN))));
$defaultProductPrice = $params[0];
$budgetPersonA = $params[1];
$budgetPersonB = $params[2];
$currentTotalPrice = $defaultProductPrice;
$incrementPersonA = 10;
$incrementPersonB = 1000;
$finalPurchaser = "";

while (true) {
  $nextPriceA = $currentTotalPrice + $incrementPersonA;
  if ($nextPriceA > $budgetPersonA) {
    $finalPurchaser = "B";
    break;
  }

  $currentTotalPrice = $nextPriceA;

  $nextPriceB = $currentTotalPrice + $incrementPersonB;
  if ($nextPriceB > $budgetPersonB) {
    $finalPurchaser = "A";
    break;
  }

  $currentTotalPrice = $nextPriceB;
}

echo "$finalPurchaser $currentTotalPrice";
