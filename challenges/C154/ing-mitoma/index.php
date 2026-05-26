<?php
// ここに回答を実装してください
$getRule = array_map('intval', explode(" ", trim(fgets(STDIN))));
$countProducts = $getRule[0];
$discountMinPrice = $getRule[1]; //割引対象商品の最低金額
$discountPrice = 0;

$allPrices = array_map('intval', explode(" ", trim(fgets(STDIN))));
$sum = 0;

$setHighPrice = $allPrices[0];
for ($i = 0; $i < $countProducts; $i++) {
  if ($allPrices[$i] > $setHighPrice) {
    $setHighPrice = $allPrices[$i];
  }
  $sum += $allPrices[$i];
}

//割引対象の商品であるかどうかの確認
if ($setHighPrice > $discountMinPrice) {
  $discountPrice = $setHighPrice / 2;
}

$totalPrices = $sum - $discountPrice;

echo $totalPrices;
