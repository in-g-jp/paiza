<?php
// ここに回答を実装してください
$input = intval(fgets(STDIN));
$resultCount = 0;

while ($line = fgets(STDIN)) {
    $games = explode(' ', trim($line));
    // アリスさんの出した手
    $x = $games[0];
    // ボブさんの出した手
    $y = $games[1];

    // アリスさんの勝利数をカウントする
    if ($x == "G" && $y == "C") {
        $resultCount++;
    }

    if ($x == "C" && $y == "P") {
        $resultCount++;
    }

    if ($x == "P" && $y == "G") {
        $resultCount++;
    }
}

echo $resultCount;
