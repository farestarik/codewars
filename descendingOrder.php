<?php

include "helpers.php";

function descendingOrder(int $n): int{
  if($n >= 0){
    $n = str_split($n);
    rsort($n);
    return intval(implode("", $n));  
  }
}


echo descendingOrder(1021) . br(); // Expected:  2110
echo descendingOrder(15) . br(); // Expected:  51
echo descendingOrder(123456789) . br(); // Expected:  987654321