<?php
$invalidos = [];

for($i = 1;$i < 10;$i++) {
    $val = '';
    for($j = 0;$j < 11;$j++)
        $val .= $i;
    $invalidos[] = $val;
}

print_r($invalidos);