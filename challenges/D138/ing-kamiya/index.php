<?php
// 一行目は出力に必要ないので受け取るだけ
fgets(STDIN);
while ($line = fgets(STDIN)) {
    echo $line;
}
