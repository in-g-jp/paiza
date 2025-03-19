<?php
//回転寿司の皿の数
$T = intval(fgets(STDIN));
//メロンの数
$melonCount = 0;
//上限のカウント
$upperCount = 0;
//皿にのってるネタの名前
while ($line = trim(fgets(STDIN))) {
    //上限が0、または11以上の時に上限を０に戻す
    if ($upperCount >= 11 || $upperCount === 0) {
        $upperCount = 0;
        //もしメロンが来たらそこからuppercountを足していく。
        //メロンが来てからカウントをすることで10皿流れるまで間隔を開けられる。
        if ($line === "melon") {
            $melonCount++;
            $upperCount++;
        }
        continue;
    }
    if ($upperCount > 0) {
        $upperCount++;
    }
}

echo $melonCount;
