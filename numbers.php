<?php
// phpcs:ignoreFile
$matrix = [];
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
    $matrix[] = $arr;
}
// matrix 7x7 for print
for ($i = 1; $i < count($matrix) - 1; $i++) {
    $arr = $matrix[$i];
    echo vsprintf(str_repeat('%d ', 7) . "\n", array_slice($arr, 1, 7));
}
