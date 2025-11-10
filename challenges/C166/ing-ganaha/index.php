<?php
    $S = (int)trim(fgets(STDIN));
    $count = 0;
    while($S>0){
        if (floor($S/500)>0){
            $count += floor($S/500);
            $S-=floor($S/500)*500;
        } else if (floor($S/100)>0){
            $count += floor($S/100);
            $S-=floor($S/100)*100;
        } else if (floor($S/50)>0){
            $count += floor($S/50);
            $S-=floor($S/50)*50;
        } else if (floor($S/10)>0){
            $count += floor($S/10);
            $S-=floor($S/10)*10;
        } else if (floor($S/5)>0){
            $count += floor($S/5);
            $S-=floor($S/5)*5;
            
        }  else if (floor($S/1)>0){
            $count += floor($S/1);
            $S-=floor($S/1);
        } 
    }
    echo $count."\n";
?>