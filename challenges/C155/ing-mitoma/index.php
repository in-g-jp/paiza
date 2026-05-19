<?php
// ここに回答を実装してください
$keyword = rtrim(fgets(STDIN));
$count = rtrim(fgets(STDIN));
$words = [];
for ($i = 0; $i < $count; $i++) {
  $words[] = rtrim(fgets(STDIN));
}

for ($i = 0; $i < $count; $i++) {
  if (str_contains($words[$i], $keyword)) {
    echo "Yes\n";
  } else {
    echo "No\n";
  }
}
