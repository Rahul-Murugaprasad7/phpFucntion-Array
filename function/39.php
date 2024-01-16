<?php

function isAssociativeArray($array) {
    return is_array($array) && count(array_filter(array_keys($array), 'is_string')) > 0;

    // is_array($array): Checks if $array is an array.
    // array_keys($array): Retrieves all the keys from the array.
    // array_filter(array_keys($array), 'is_string'): Filters out only the string keys.
    // count(...) > 0: Checks if there is at least one string key.
}

$associativeArray = ['name' => 'John', 'age' => 25, 'city' => 'New York'];
$indexedArray = [1, 2, 3, 4, 5];

// if (isAssociativeArray($associativeArray)) {
//     echo "The array is associative.";
// } else {
//     echo "The array is not associative.";
// }

if (isAssociativeArray($indexedArray)) {
    echo "The array is associative.";
} else {
    echo "The array is not associative.";
}

?>
