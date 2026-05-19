<?php
$rules = rtrim(fgets(STDIN));
$rule = explode(" ", $rules);
$count_cars = $rule[0];
$distance_rule = $rule[1];
$totalDistance = 0;

for ($i = 0; $i < $count_cars - 1; $i++) {
  $distance_cars = rtrim(fgets(STDIN));
  if ($distance_cars <= $distance_rule) {
    $totalDistance += $distance_cars;
  }
}
echo $totalDistance;
