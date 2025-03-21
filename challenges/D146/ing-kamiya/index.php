<?php
// 省略前の単語
$S = trim(fgets(STDIN));
// 省略する母音
$vowels = array('a', 'i', 'u', 'e', 'o');

$str = str_replace($vowels, '', $S);
echo $str;
