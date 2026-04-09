<?php
$input = trim(fgets(STDIN));
$result = preg_replace('/-+/', '-', $input);
echo $result;
