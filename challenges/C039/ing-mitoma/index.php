<?php
// ここに回答を実装してください
$arrayInt = explode("+", trim(fgets(STDIN)));
$countNumbers = count($arrayInt);
$sum = 0;
for ($i = 0; $i < $countNumbers; $i++) {
  $countNumber = str_split($arrayInt[$i]);
  $countAllElement = count($countNumber);

  for ($j = 0; $j < $countAllElement; $j++) {
    if ($countNumber[$j] === '<') {
      $countDoubleDigit = 10; //2桁の数字をカウントする用の変数
      $sum += $countDoubleDigit;
    }
    if ($countNumber[$j] === '/') {
      $sum++;
    }
  }
}
echo $sum;
