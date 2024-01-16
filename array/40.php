<?php

$randomNumbers = array_map(function () {
     return rand(1, 100); 
    },
     range(1, 10));

print_r($randomNumbers);
?>