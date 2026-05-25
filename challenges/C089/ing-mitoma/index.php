<?php
// ここに回答を実装してください
$array = array_map('intval', explode(" ", trim(fgets(STDIN))));

//的の行列を取得
$H = $array[0];
$W = $array[1];


$totalScores = 0;

//投球後の結果、それぞれの的の得点を格納する配列の作成
$allResults = [];
$allRules = [];

for ($i = 0; $i < $H; $i++) {
  $allResults[] = str_split(trim(fgets(STDIN)));
}


for ($i = 0; $i < $H; $i++) {
  $allRules[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}

for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $W; $j++) {
    if ($allResults[$i][$j] == "o") {
      $totalScores += $allRules[$i][$j];
    }
  }
}
echo $totalScores;
