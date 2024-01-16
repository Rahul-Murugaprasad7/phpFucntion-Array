<?php

function isLeapYear($year) {
    
    return ($year % 4 == 0 && $year % 100 != 0) ;
}

$yearToCheck = 2024;

if (isLeapYear($yearToCheck)) {
    echo "$yearToCheck is a leap year.";
} else {
    echo "$yearToCheck is not a leap year.";
}

?>
