<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$N = (int)fgets(STDIN);
$length = [];
$s = trim(fgets(STDIN));
$words = explode(" ", $s);
$length = array_map('strlen', $words);
echo max($length) - min($length);
