<?php
function sortStringsByLength($strings) {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array("Apple", "Banana", "Orrange", "Multa", "Goava");
$sortedStrings = sortStringsByLength($strings);

foreach ($sortedStrings as $string) {
    echo $string . " ";
}