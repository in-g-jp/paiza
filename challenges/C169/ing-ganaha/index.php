<?php
$myPoint = fgets(STDIN);
    $depo=fgets(STDIN);
    $totalPoint=0;
    $week=7;
    for($i=0;$i<$week;$i++){
        $totalPoint+=$myPoint;
        $myPoint=$myPoint*$depo/100;
    }
    echo $totalPoint;
?>
