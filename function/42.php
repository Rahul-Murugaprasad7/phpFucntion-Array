<?php

function dateDifference($date1, $date2) {

    $dateTime1 = new DateTime($date1);
    $dateTime2 = new DateTime($date2);

    $interval = $dateTime1->diff($dateTime2);       //calc the diff between the dates

    return $interval->days;
}

$date1 = '2003-07-07';
$date2 = '2024-01-16';

$daysDifference = dateDifference($date1, $date2);

echo "The difference between $date1 and $date2 is $daysDifference days.";

?>
