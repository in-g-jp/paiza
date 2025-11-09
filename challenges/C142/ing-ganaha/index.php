<?php
    $my = trim(fgets(STDIN));
    $word_num = trim(fgets(STDIN));
    $meel = explode(' ', trim(fgets(STDIN)));

    if (in_array($my, $meel)) {
        echo "Yes";
    } else {
        echo "No";
    }
?>