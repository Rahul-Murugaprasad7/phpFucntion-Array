<?php
function myFamily($lastname, ...$firstname) {
    $txt = " ";                                     //empty string to store final result
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("singh", "raj", "rohit",);
  echo $a;
?>