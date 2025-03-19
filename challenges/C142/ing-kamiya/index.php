<?php
// 料理名
$S = trim(fgets(STDIN));
// メニューの単語数
$N = intval(fgets(STDIN));
// メニュー名を表す単語
$T = trim(fgets(STDIN));

$menuNames = explode(' ', $T);

// メニュー名を表す単語の中に料理名と完全一致する単語があるか
if (in_array($S, $menuNames)) {
    echo "Yes\n";
} else {
    echo "No\n";
}
