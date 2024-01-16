<?php
function lowercase($str){
    return strtolower($str);
}

$str = "HEllo EveryOne";
$lowerstr = lowercase($str);

echo $str."<br>";
echo $lowerstr;

?>