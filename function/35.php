<?php

function customStringLength($str) {
    $length = 0;
    
    // Iterate through each character until null terminator is reached
    for ($i = 0; isset($str[$i]) && $str[$i] !== '0'; $i++) {           //isset is used to check whether a variable is set and is not 
        $length++;
    }

    return $length;
}

// $string = "Hello, World !";
$result = customStringLength("Hello, World!");

echo "Length of the string: $result";

?>
