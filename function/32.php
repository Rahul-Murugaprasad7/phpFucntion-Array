<?php

function mergeAssociativeArrays($array1, $array2) {
    // Using the "+" operator to merge arrays (values from the second array overwrite values from the first array)
    $mergedArray = $array1 + $array2;
    return $mergedArray;
}

$array1 = array('name' => 'John', 'age' => 30, 'city' => 'New York');
$array2 = array('age' => 35, 'occupation' => 'Engineer', 'country' => 'USA');

$mergedResult = mergeAssociativeArrays($array1, $array2);

print_r($mergedResult);

?>
