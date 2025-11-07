<?php
list($itemCount,$border) = explode(' ',fgets(STDIN));
    $itemValue = explode(' ',fgets(STDIN));
    $maxIndex = array_search(max($itemValue),$itemValue);
    if($itemValue[$maxIndex]>$border){
        $itemValue[$maxIndex]=floor($itemValue[$maxIndex]/2);
    }
    
    $totalValue=0;
    for($i=0;$i<$itemCount;$i++){
        $totalValue+=$itemValue[$i];
    }
    echo $totalValue;
?>
