<?php
$inputs = explode(' ', fgets(STDIN));

list($month, $day) = explode('/', $inputs[0]);
list($hour, $minutes) = explode(':', $inputs[1]);

$day = intval($day) + intdiv(intval($hour), 24);
$hour = intval($hour) % 24;

if ($hour < 10 && $day < 10) {
    echo $month, "/", "0", $day, " ", "0", $hour, ":", $minutes;
    return;
}
if ($hour < 10) {
    echo $month, "/", $day, " ", "0", $hour, ":", $minutes;
    return;
}
if ($day < 10) {
    echo $month, "/", "0", $day, " ", $hour, ":", $minutes;
    return;
}
echo $month, "/", $day, " ", $hour, ":", $minutes;
