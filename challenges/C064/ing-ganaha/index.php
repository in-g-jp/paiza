<?php
    list($M, $N) = array_map('intval', explode(" ", trim(fgets(STDIN))));
    
    $meel_cost = [];
    for ($i = 0; $i < $M; $i++) {
        $meel_cost[] = fgets(STDIN);
    }

    for ($i = 0; $i < $N; $i++) {
        $amounts = explode(" ", fgets(STDIN));
        $sum_cost = 0;
        for ($j = 0; $j < $M; $j++) {
            $sum_cost += floor($amounts[$j] * $meel_cost[$j] / 100);
        }
        echo $sum_cost . "\n";
    }
?>