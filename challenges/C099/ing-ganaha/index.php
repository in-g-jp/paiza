<?php
    list($N,$D) = explode(' ',trim(fgets(STDIN)));
    $leng=[];
    for($i=0;$i<$N-1;$i++){
        $leng[$i]=trim(fgets(STDIN));
    }
    echo $D*($D*$N-array_sum($leng));
?>