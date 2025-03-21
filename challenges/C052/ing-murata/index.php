<?php
$line = explode(' ', fgets(STDIN));
//高さ
$H = intval($line[0]);
//横幅
$W = intval($line[1]);

$inputs = explode(' ', fgets(STDIN));
//y座標の移動分
$dy = intval($inputs[0]);
//x座標の移動分
$dx = intval($inputs[1]);

//移動してできた再描画分を計算
$result = abs($H * $dx) + abs($W * $dy) - abs($dy * $dx);
echo $result;
