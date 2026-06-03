<?php
// ここに回答を実装してください
$numberOfStudents = (int)trim(fgets(STDIN));
$voteResults = [];

for ($i = 0; $i < $numberOfStudents; $i++) {
  $voteResults[] = trim(fgets(STDIN));
}

$voteCounts = array_count_values($voteResults);
$nominatedStudent = array_search(max($voteCounts), $voteCounts);

echo $nominatedStudent;
