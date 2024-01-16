<!-- to remove the selcted value in array -->

<?php

function removeValueFromArray($array, $valueToRemove) {
    return array_diff($array, [$valueToRemove]);
}

$array = [1, 2, 3, 4, 2, 5];
$valueToRemove = 2;

$resultArray = removeValueFromArray($array, $valueToRemove);

print_r($resultArray);

?>
