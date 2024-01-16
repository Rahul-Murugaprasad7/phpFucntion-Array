<?php

function isPalindrome($str) {

    $cleanedStr = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    
    $reversedStr = strrev($cleanedStr);
    
    return $cleanedStr === $reversedStr;
}

$inputString = "1233321";
if (isPalindrome($inputString)) {
    echo "The string '$inputString' is a palindrome.";
} else {
    echo "The string '$inputString' is not a palindrome.";
}

?>
