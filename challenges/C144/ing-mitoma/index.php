<?php
// ここに回答を実装してください
$totalGames = (int)trim(fgets(STDIN));
$countWinning = 0; //アリスさんがじゃんけんに勝った回数

for ($i = 0; $i < $totalGames; $i++) {
  $gameResults = trim(fgets(STDIN));
  $result = explode(" ", $gameResults);
  if ($result[0] == "G" && $result[1] == "C") {
    $countWinning += 1;
    continue;
  }
  if ($result[0] == "C" && $result[1] == "P") {
    $countWinning += 1;
    continue;
  }
  if ($result[0] == "P" && $result[1] == "G") {
    $countWinning += 1;
    continue;
  }
}
echo $countWinning;
