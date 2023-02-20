<?php

function cOLAWs($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

if (cOLAWs('Hello World')) {
    echo 'The string contains only letters and whitespace.';
} else {
    echo 'The string contains non-letter characters.';
}

