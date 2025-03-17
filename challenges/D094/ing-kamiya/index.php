<?php
// ここに回答を実装してください
$countDog = 0;
$countCat = 0;
while ($line = fgets(STDIN)) {
    if (strpos($line, 'cat') !== false) {
        $countCat++;
    }
    if (strpos($line, 'dog') !== false) {
        $countDog++;
    }
}

if ($countCat > $countDog) {
    echo "cat";
} else {
    echo "dog";
}
