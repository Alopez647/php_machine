<?php

function bubbleSort(array $arr):array {
    $n = count($arr);
    echo "the length of $arr is $n";

    return $arr;
}
;
$arr = [1, 2, 3, 4];
bubbleSort($arr);
