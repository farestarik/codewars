<?php

include "helpers.php";

function digital_root(int $number){
    $number = str_split($number);
    return  (strlen(array_sum($number)) == 1) ? array_sum($number) : digital_root(array_sum($number));
}


echo digital_root(16) . br(); // Expected:  7
echo digital_root(195) . br(); // Expected:  6