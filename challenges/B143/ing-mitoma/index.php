<?php
// ここに回答を実装してください
[$NumberOfStudents, $gameResults] = array_map('intval', explode(" ", trim(fgets(STDIN))));

$lengthOfQueues = array_fill(1, $NumberOfStudents, 1);

for ($i = 0; $i < $gameResults; $i++) {
  [$winner, $loser] = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $lengthOfQueues[$winner] += $lengthOfQueues[$loser];
  $lengthOfQueues[$loser] = 0;
}

arsort($lengthOfQueues);
$maxLengthValue = max($lengthOfQueues);
$studentNumberOfMaxLengths = [];

foreach ($lengthOfQueues as $player => $score) {
  if ($score === $maxLengthValue) {
    $studentNumberOfMaxLengths[] = $player;
  }
}

foreach ($studentNumberOfMaxLengths as $max) {
  echo $max . PHP_EOL;
}
