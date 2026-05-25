<?php
// ここに回答を実装してください
$N = (int)trim(fgets(STDIN));
$M = (int)trim(fgets(STDIN));
$allRules = array_map('intval', explode(" ", trim(fgets(STDIN))));
$diceMove = array_map('intval', explode(" ", trim(fgets(STDIN))));
$totalScores = 0;
$currentLocation = 0;

//スタート地点の値を取得
$totalScores += $allRules[0];

for ($i = 0; $i < $M; $i++) {
  $currentLocation += $diceMove[$i];

  //現在地がマス上にいる場合のみの条件
  if ($currentLocation < $N);
  $totalScores += $allRules[$currentLocation];
}

echo $totalScores;
