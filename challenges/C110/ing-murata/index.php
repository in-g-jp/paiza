<?php
$input = intval(fgets(STDIN));
//日付を入れる配列
$data = [];
//最も連続した日程が更新される場合を入れる配列
$newData = [];
$count = 0;

while ($line = intval(fgets(STDIN))) {
    $count++;
    //data配列が空の場合
    if (empty($data)) {
        array_push($data, $line);
        continue;
    }
    //$dataの配列の長さ-1を$keyとする
    $key = count($data) - 1;
    //$配列の最後に入っている日の次の日の値を$nとする
    $n = $data[$key] + 1;

    //$nと$lineが同じ場合
    if ($n === $line) {
        array_push($data, $line);
        continue;
    }
    //最も連続した日程が更新される場合
    if (count($newData) < count($data)) {
        $newData = [];
        $newData = $data;
    }
    $data = [];
    array_push($data, $line);
}

//最後の連続区間が更新されていない可能性への対策
if (count($data) > count($newData)) {
    $newData = $data;
}

echo $newData[0] . " " . $newData[count($newData) - 1];
