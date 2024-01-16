<?php

function findLastIndex($array, $value) {
    $lastIndex = 0;

    foreach ($array as $index => $element) {
        if ($element === $value) {
            $lastIndex = $index;
        }
    }

    return $lastIndex;
}

$numbers = [1, 2, 3, 4, 2, 5, 2];
$valueToFind = 2;

$lastIndex = findLastIndex($numbers, $valueToFind);

if ($lastIndex !== 0) {
    echo "The last occurrence of $valueToFind is at index $lastIndex.";
} else {
    echo "$valueToFind not found in the array.";
}

?>
