<?php
$play_count = fgets(STDIN);
$count = 0;
for ($i = 0; $i < $play_count; $i++) {
    list($a[$i], $b[$i]) = explode(' ', trim(fgets(STDIN)));
}
for ($i = 0; $i < $play_count; $i++) {
    if ($a[$i] == 'G' and $b[$i] == 'C') {
        $count++;
    } else if ($a[$i] == 'C' and $b[$i] == 'P') {
        $count++;
    } else if ($a[$i] == 'P' and $b[$i] == 'G') {
        $count++;
    }
}
echo $count;
