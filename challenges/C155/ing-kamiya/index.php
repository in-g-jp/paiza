<?php
// 特定のワード
$S = trim(fgets(STDIN));
// メールの件数
$N = fgets(STDIN);

while ($line = fgets(STDIN)) {
    $mailTitle = trim($line);
    if (strpos($mailTitle, $S) !== false) {
        echo "Yes\n";
        continue;
    }
    echo "No\n";
}
