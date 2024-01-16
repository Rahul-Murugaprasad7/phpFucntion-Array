<?php

function validateEmail($email) {
    // Define the regular expression pattern for a valid email address
    $pattern = '/^[a-z,A-Z,0-9,.,_,-]+@[a-z,A-Z,0-9]+.[a-z,A-Z]{2,}$/';

    // Use preg_match to check if the email matches the pattern
    if (preg_match($pattern, $email)) {
        return true; 
    } else {
        return false; 
    }
}

// Example usage:
$emailToValidate = 'user@xample.com';

if (validateEmail($emailToValidate)) {
    echo "The email address is valid.";
} else {
    echo "The email address is invalid.";
}

?>
<!-- doubt -->