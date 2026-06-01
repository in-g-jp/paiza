<?php
// ここに回答を実装してください
$totalStudentCount = (int)trim(fgets(STDIN));
$voteResults = [];

for ($i = 0; $i < $totalStudentCount; $i++) {
  $voteResults[] = trim(fgets(STDIN));
}

$voteCounts = array_count_values($voteResults);
$winningStudent = array_search(max($voteCounts), $voteCounts);

echo $winningStudent;
