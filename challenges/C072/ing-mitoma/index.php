<?php
// ここに回答を実装してください
[$attack, $defense, $agility] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$N = (int)trim(fgets(STDIN));
$isEvolution = false;

for ($i = 0; $i < $N; $i++) {
  [$evolvedMonsterName, $attackMinimum, $attackMaximum, $defenseMinimum, $defenseMaximum, $agilityMinimum, $agilityMaximum] = explode(" ", trim(fgets(STDIN)));
  //変数の型をint型に揃えたい
  $attackMinimum = (int)$attackMinimum;
  $attackMaximum = (int)$attackMaximum;
  $defenseMinimum = (int)$defenseMinimum;
  $defenseMaximum = (int)$defenseMaximum;
  $agilityMaximum = (int)$agilityMaximum;
  $agilityMinimum = (int)$agilityMinimum;

  if ($attack < $attackMinimum || $attackMaximum < $attack) {
    continue;
  }
  if ($defense < $defenseMinimum || $defenseMaximum < $defense) {
    continue;
  }
  if ($agility < $agilityMinimum || $agilityMaximum < $agility) {
    continue;
  }
  $isEvolution = true;
  echo $evolvedMonsterName . PHP_EOL;
}

if (!$isEvolution) {
  echo "no evolution";
}
