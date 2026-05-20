<?php
$total_measure = (int)trim(fgets(STDIN)); //水深の測定回数
$total_depth = 0; //平均を求める際に使用する水深の合計値
$array_depths = trim(fgets(STDIN));
$array_depth = explode(" ", $array_depths);


for ($i = 0; $i < $total_measure; $i++) {
  $total_depth += $array_depth[$i];
}

//小数点を切り上げて出力
echo ceil($total_depth / $total_measure);
