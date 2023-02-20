<?php

echo "Hello PHP";

function removeFirstAndLastElement($arr)
{
    array_shift($arr); // remove first element
    array_pop($arr); // remove last element
    return $arr;
}


$originalArr = array(1, 2, 3, 4, 5);
$newArr = removeFirstAndLastElement($originalArr);
print_r($newArr);
