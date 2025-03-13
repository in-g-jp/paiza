<?php
// ここに回答を実装してください
$inputs = explode(' ', fgets(STDIN));
//正解の順番
$correct = str_split(trim($inputs[1]));
//不正解の順番
$uncorrect = str_split(trim($inputs[2]));
//回転した回数
$count = 0;

do {
    //もし正解の順番と同じなら回転した回数を出力
    if ($correct === $uncorrect) {
        echo $count;
        break;
    }

    // 先頭の要素を取得し、末尾に追加
    $uncorrect[] = array_shift($uncorrect);
    $count++;
} while (true);
