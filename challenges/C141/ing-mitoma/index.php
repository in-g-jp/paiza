<?php
// ここに回答を実装してください
$totalStudent = (int)trim(fgets(STDIN));
$voteResults = [];

for ($i = 0; $i < $totalStudent; $i++) {
  $voteResults[] = trim(fgets(STDIN));
}

$voteResultCount = array_count_values($voteResults);
$winningStudent = array_search(max($voteResultCount), $voteResultCount);

echo $winningStudent;
