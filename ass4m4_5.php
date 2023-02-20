<?php

function find_second_largest($arr) {

    $largest = $arr[0];
    $second_largest = null;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $second_largest = $largest;
            $largest = $num;
        } else if ($num != $largest && ($second_largest == null || $num > $second_largest)) {
            $second_largest = $num;
        }
    }

    return $second_largest;
}

$arr = [1,2,3,4,5,6,7,8,9,19];
$second_largest = find_second_largest($arr);
echo "The second largest number in the array is: $second_largest";
