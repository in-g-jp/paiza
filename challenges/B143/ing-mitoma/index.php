<?php
// ここに回答を実装してください
[$numberOfStudents, $gameCounts] = array_map('intval', explode(" ", trim(fgets(STDIN))));

$queueLengths = array_fill(1, $numberOfStudents, 1);

for ($i = 0; $i < $gameCounts; $i++) {
  [$winner, $loser] = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $queueLengths[$winner] += $queueLengths[$loser];
  $queueLengths[$loser] = 0;
}

$maxLength = max($queueLengths);
$maxLengthStudentNumbers = [];

foreach ($queueLengths as $studentNumber => $queueLength) {
  if ($queueLength === $maxLength) {
    echo "$studentNumber\n";
  }
}
