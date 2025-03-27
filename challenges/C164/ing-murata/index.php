<?php
//配列の長さ(使わない)
$N = intval(fgets(STDIN));
//配列
$inputs = explode(' ', trim(fgets(STDIN)));
//使わない入力
$unused = intval(fgets(STDIN));

//正しい配列
$correct = $inputs;

//入れ替える配列のkeyが渡される
while ($line = fgets(STDIN)) {
    $lines = explode(' ', trim($line)); //2,3
    $L = intval($lines[0]) - 1; //1
    $R = intval($lines[1]) - 1; //2
    //一旦それぞれの値をFirstとSecondに格納
    $First = $inputs[$L]; //4
    $Second = $inputs[$R]; //3

    //それぞれ新たなkeyに振り分け
    $inputs[$L] = $Second; //3
    $inputs[$R] = $First; //4


}
//昇順にした正解
$sortedCorrect = sort($correct);

//昇順になっていればYes
if ($correct === $inputs) {
    echo "Yes";
    return;
}
echo "No";
