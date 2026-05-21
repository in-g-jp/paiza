<?php
$inputRule = array_map('intval', explode(" ", trim(fgets(STDIN))));
$locationMyseat = array_map('intval', explode(" ", trim(fgets(STDIN))));
$locationMyseat[0]--; //インクリメントの理由：配列は0番目から始まるため、受け取った値を対応させた。ex) 自分の座席が3列目の2行目→$locationMyseat[2][1]と対応するようにしたい。
$locationMyseat[1]--;
$movingRules = trim(fgets(STDIN));
$movingRule = str_split($movingRules);
$arraySeats = [];

for ($i = 0; $i < $inputRule[1]; $i++) {
  $arraySeats[$i] = array_map('intval', explode(" ", trim(fgets(STDIN)))); //README.mdに記載してある通り、座席表を配列に格納
}

for ($i = 0; $i < $inputRule[0]; $i++) {
  if ($movingRule[$i] == "F") {
    $locationMyseat[0]--;
    $gotChocolate = $arraySeats[$locationMyseat[0]][$locationMyseat[1]];
    echo $gotChocolate . "\n";
    continue;
  }
  if ($movingRule[$i] == "B") {
    $locationMyseat[0]++;
    $gotChocolate = $arraySeats[$locationMyseat[0]][$locationMyseat[1]];
    echo $gotChocolate . "\n";
    continue;
  }
  if ($movingRule[$i] == "R") {
    $locationMyseat[1]++;
    $gotChocolate = $arraySeats[$locationMyseat[0]][$locationMyseat[1]];
    echo $gotChocolate . "\n";
    continue;
  }
  if ($movingRule[$i] == "L") {
    $locationMyseat[1]--;
    $gotChocolate = $arraySeats[$locationMyseat[0]][$locationMyseat[1]];
    echo $gotChocolate . "\n";
    continue;
  }
}
