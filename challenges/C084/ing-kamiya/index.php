<?php
// ここに回答を実装してください
$input = fgets(STDIN);
// 与えられる文字列
$S = trim($input);

$count = mb_strlen($S);
$decoration = "+";
$longDecoration = "";
// 文字の両端の"+"が2つあるので$countより2回多く回す
for ($i = 0; $i < $count + 2; $i++) {
    $longDecoration .= "+";
}

echo $longDecoration . "\n" . $decoration . $S . $decoration . "\n" . $longDecoration;
