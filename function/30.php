<?php

function Square($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

$numberToCheck = 77;

if (Square($numberToCheck)) {
    echo "$numberToCheck is a perfect square.";
} else {
    echo "$numberToCheck is not a perfect square.";
}

?>
