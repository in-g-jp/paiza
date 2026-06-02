<?php
// ここに回答を実装してください
[$attack, $defense, $agility] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$monsterCount = (int)trim(fgets(STDIN));
$evolutionFound = false;

for ($i = 0; $i < $monsterCount; $i++) {

  $candidateFields = explode(" ", trim(fgets(STDIN)));
  $evolvedMonsterName = $candidateFields[0];
  [$attackMinimum, $attackMaximum, $defenseMinimum, $defenseMaximum, $agilityMinimum, $agilityMaximum] = array_map("intval", array_slice($candidateFields, 1));

  if ($attack < $attackMinimum || $attackMaximum < $attack) {
    continue;
  }
  if ($defense < $defenseMinimum || $defenseMaximum < $defense) {
    continue;
  }
  if ($agility < $agilityMinimum || $agilityMaximum < $agility) {
    continue;
  }
  $evolutionFound = true;
  echo "$evolvedMonsterName\n";
}

if (!$evolutionFound) {
  echo "no evolution";
}
