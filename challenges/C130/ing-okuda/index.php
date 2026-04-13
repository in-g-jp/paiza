<?php
$N = fgets(STDIN);
$results = [];
for ($i = 0; $i < $N; $i++) {
    $s = trim(fgets(STDIN));
    [$a, $b] = explode(' ', $s);
    if ($a === 'y' && $b === 'y') {
        continue;
    }
    $results[] = ($i + 1);
}
$n = count($results);
echo ($n) . "\n";
foreach ($results as $num) {
    echo $num . "\n";
}
