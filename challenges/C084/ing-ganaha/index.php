<?php
    $target = trim(fgets(STDIN));
    $sur_cha = '+';
    $sur_str = str_repeat($sur_cha,strlen($target)+2);
    echo $sur_str."\n",$sur_cha,$target,$sur_cha."\n",$sur_str;
?>