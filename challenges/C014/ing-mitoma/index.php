<?php
[$totalBoxCount, $radiusOfBall] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$diameterOfBall = 2 * $radiusOfBall;

for ($boxNumber = 1; $boxNumber <= $totalBoxCount; $boxNumber++) {
  $boxSizes = array_map("intval", explode(" ", trim(fgets(STDIN))));
  $minimumSizeOfBox = min($boxSizes);
  if ($diameterOfBall <= $minimumSizeOfBox) {
    echo "$boxNumber\n";
  }
}
