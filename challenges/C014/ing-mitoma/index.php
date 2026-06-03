<?php
// ここに回答を実装してください
[$totalBoxCount, $radiusOfBall] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$diameterOfBall = 2 * $radiusOfBall;

for ($boxNumber = 1; $boxNumber <= $totalBoxCount; $boxNumber++) {
  $params = array_map("intval", explode(" ", trim(fgets(STDIN))));
  $minimumSizeOfBox = min($params);
  if ($diameterOfBall <= $minimumSizeOfBox) {
    echo "$boxNumber\n";
  }
}
