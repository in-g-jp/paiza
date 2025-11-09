<?php
    list($N,$K) = explode(' ',trim(fgets(STDIN)));
    $bass_time=[];
    $diff_time=[];
    $near_time=[];
    for($i = 0;$i < $K;$i++){
        $bass_time[$i]=(int)trim(fgets(STDIN));
    }
    sort($bass_time, SORT_NUMERIC);
    for($k = 0;$k < $K;$k++){
        $diff_time[$k]=abs($K-$bass_time[$k]);
    }
    $min_val=min($diff_time);
    $near_time=array_keys($diff_time,$min_val);
    foreach($near_time as $j){
        echo $bass_time[$j]."\n";
    }
    
?>