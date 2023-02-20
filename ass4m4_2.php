<?php

function concat_strings_backwards($string1, $string2) {
    $string1_length = strlen($string1);
    $string2_length = strlen($string2);

    $end_of_string1 = substr($string1, -$string2_length);

    $result = $end_of_string1 . $string2;

    return $result;
}

$string1 = "hello";
$string2 = "world";
$result = concat_strings_backwards($string1, $string2);
echo $result;
