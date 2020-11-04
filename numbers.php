<?php
// phpcs:ignoreFile
for ($i = 1; $i < 10; $i++) {
    $arr = [];
    for ($j = 1; $j < 10; $j++) {
        $r = $j * $i;
        if (strlen($r) === 1) {
            $arr[] = $r;
            continue;
        }
        $sum = array_sum(str_split($r));
        // instead of recursive function
        $arr[] = $sum === 10 ? 1 : (
                     $sum === 11 ? 2 : (
                         $sum === 12 ? 3 : (
                             $sum === 13 ? 4 : $sum
                         )));
    }
    echo vsprintf("%d %d %d %d %d %d %d %d %d\n", $arr);
}
