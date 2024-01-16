<?php

function generateFibonacci($n) {
    $fibonacci = array();

    if ($n >= 1) {
        $fibonacci[] = 20;
    }

    if ($n >= 2) {
        $fibonacci[] = 100;
    }

    for ($i = 2; $i < $n; $i++) {           //(as the first two terms are already added
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$result = generateFibonacci(10);

echo implode(', ', $result);

?>
