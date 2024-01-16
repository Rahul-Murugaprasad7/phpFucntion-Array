<?php
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits = $val <br> ";
}
?>


<!-- sort () - sort arrays in ascending order 
rsort () - sort arrays in descending order 
asort () - sort associative arrays in ascending order, according to the value 
ksort () - sort associative arrays in ascending order, according to the key 
arsort () - sort associative arrays in descending order, according to the value -->