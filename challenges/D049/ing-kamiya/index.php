<?php
// ここに回答を実装してください
$input = fgets(STDIN);

if (strpos($input, 'noaki') !== false) {
    $input = str_replace('noaki', '', $input);
}

echo $input;
