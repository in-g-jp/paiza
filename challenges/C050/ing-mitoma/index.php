<?php
// ここに回答を実装してください
$rules = array_map("intval", explode(" ", trim(fgets(STDIN))));
$defaultProductPrice = $rules[0];
$BudgetpersonA = $rules[1];
$BudgetpersonB = $rules[2];
$currentTotalPrice = $defaultProductPrice;
$incrementPersonA = 10;
$incrementPersonB = 1000;
$finalPurchaser = "";

while (true) {
  $nextPriceA = $currentTotalPrice + $incrementPersonA;
  if ($nextPriceA  > $BudgetpersonA) {
    $finalPurchaser = "B";
    break;
  }

  $currentTotalPrice = $nextPriceA;

  $nextPriceB = $currentTotalPrice + $incrementPersonB;
  if ($nextPriceB > $BudgetpersonB) {
    $finalPurchaser = "A";
    break;
  }

  $currentTotalPrice = $nextPriceB;
}

echo $finalPurchaser . " " . $currentTotalPrice;
