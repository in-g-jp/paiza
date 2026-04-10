<?php
$N = (int)fgets(STDIN);
$input = trim(fgets(STDIN));
$flower = explode(' ', $input);
$deleate_unique = array_unique($flower);
$counts = count($deleate_unique);
echo $counts;
