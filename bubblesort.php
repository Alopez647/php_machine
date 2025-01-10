<?php

function bubbleSort(array $arr):array {
    $n = count($arr);
    
    #   echo "the length of $arr is $n";
    for ($i = 0; $i <= $n - 1; $i++) {
        for ($j = 0; $j <= $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] =  $arr[$j +1];
                $arr[$j +1] = $temp;
            };
        };
    echo "$arr[$i] \n";
    };
    return $arr;
};
$arr = [5, 2, 13, 4, 1, 9];
bubbleSort($arr);
