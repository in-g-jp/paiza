<?php
// ここに回答を実装してください
$params = array_map("intval", explode(" ", trim(fgets(STDIN))));
$defaultProductPrice = $params[0];
$budgetpersonA = $params[1];
$budgetpersonB = $params[2];
$currentTotalPrice = $defaultProductPrice;
$incrementPersonA = 10;
$incrementPersonB = 1000;
$finalPurchaser = "";

while (true) {
  $nextPriceA = $currentTotalPrice + $incrementPersonA;
  if ($nextPriceA  > $budgetpersonA) {
    $finalPurchaser = "B";
    break;
  }

  $currentTotalPrice = $nextPriceA;

  $nextPriceB = $currentTotalPrice + $incrementPersonB;
  if ($nextPriceB > $budgetpersonB) {
    $finalPurchaser = "A";
    break;
  }

  $currentTotalPrice = $nextPriceB;
}

echo "$finalPurchaser $currentTotalPrice";
