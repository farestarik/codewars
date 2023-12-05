<?php

include "helpers.php";


function multiply(string $a, string $b):string {
    $result = "";
    $a = +$a;
    $b = +$b;
    $result = $a * $b;
    // $result = number_format(floatval($result), 0, '', '');
    return number_format($result, 0, '', '');
    // $json = json_encode($result, JSON_BIGINT_AS_STRING);
    // return $json;
    // return json_decode($json, false, 512, JSON_BIGINT_AS_STRING);
}

// echo multiply(5,5) . br();
echo multiply("1020303004875647366210","2774537626200857473632627613");
