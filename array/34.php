<?php
function is_even($num1) {
    return $num1 % 2 == 0;
}

$numbers = range(10, 50);

$result = array_map('is_even', $numbers);

print_r ($result);
?>