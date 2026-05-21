<?php
// $input_rulesには[店舗数、営業月数]の配列
$input_rules = array_map("intval", explode(" ", trim(fgets(STDIN))));
//$total_costsには[建設費用、一月あたりの人件費、ラーメン一杯あたりの利益]の配列
$total_costs = array_map("intval", explode(" ", trim(fgets(STDIN))));
//店舗ごとで売れたラーメンを入れる配列
$saled_ramen = [];
//閉店数の合計値
$count_closedstore = 0;

for ($i = 0; $i < $input_rules[0]; $i++) {
  $saled_ramen[] = (int)trim(fgets(STDIN));
  //3ヶ月の利益を計算
  $total_profit = $saled_ramen[$i] * $total_costs[2] - $total_costs[0] - $total_costs[1] * $input_rules[1];
  if ($total_profit < 0) {
    $count_closedstore += 1;
  }
}
echo $count_closedstore;
