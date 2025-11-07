<?php
list($itemCount,$goalPoint) = explode(' ',fgets(STDIN));
    $itemValue=explode(' ',fgets(STDIN));
    $totalPoint=0;
    
    for($i=0;$i<$itemCount;$i++){
        $totalPoint+=floor($itemValue[$i]/100);
    }
    if($totalPoint>=$goalPoint){
        echo 0;
    }else{
        echo ($goalPoint-$totalPoint)*100;
    }
?>
