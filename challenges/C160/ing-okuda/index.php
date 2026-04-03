<?php
$N = fgets(STDIN);
$rain = array_map('intval', explode(' ', trim(fgets(STDIN))));
$average_rain = ceil(array_sum($rain) / $N);
echo $average_rain;
