<?php
// ここに回答を実装してください
    $inputs = explode(' ', trim(fgets(STDIN)));
    //風が吹く時刻の長さ
    $T = intval($inputs[0]);
    //初期のシャボン玉の座標
    $X = intval($inputs[1]);
    $Y = intval($inputs[2]);
    //最大のXの値
    $max = $X;

    //風が吹く時間の長さ回繰り返し
    while($line = trim(fgets(STDIN))){
        // 空白や改行を削除してからexplodeする
        $points = explode(' ', $line);
       
        //移動する分の値
        $x = intval($points[0]);
        $y = intval($points[1]);
        
        //x,yの値だけシャボン玉を移動
        $X += $x;
        $Y += $y;
        //もし現在のx座標の最大値より$Xが大きければ更新
        if($max <= $X){
            $max = $X;
        }
        
        //もし地面に衝突したら繰り返し終了
        if($Y <= 0){
            break;
        }
    }

    echo $max;
?>