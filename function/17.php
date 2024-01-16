<?php
function removeDuplicates($inputArray) {
    
    return array_values(array_unique($inputArray));
}

$inputArray = [1, 2, 3, 2, 4, 5, 4, 6];
$resultArray = removeDuplicates($inputArray);

print_r($resultArray);
?>