<?php

function findIndex($array, $value) {
    foreach ($array as $index => $element) {
        if ($element === $value) {
            return $index;
        }
    }
    return -1; // Return -1 if the value is not found in the array
}

$numbers = [10, 20, 30, 40, 50];
$searchValue = 90;

$result = findIndex($numbers, $searchValue);

if ($result !== -1) {
    echo "The index of the first occurrence of $searchValue is: $result";
} else {
    echo "$searchValue not found in the array.";
}

?>
