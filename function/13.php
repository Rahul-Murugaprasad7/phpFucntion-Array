<?php
function maxNo(array $num){
    if(empty($num)){
        return null;
    }

    $maxValue = $num[0];

    foreach ($num as $number){
        if ($number > $maxValue){
            $maxValue = $number;

        }
    }

    return $maxValue;
}

$Narray = [12, 23, 21, 43, 65, 43, 1];
$maxValue = maxNo($Narray);

echo $maxValue;


?>