<?php

include 'helpers.php';

$a = "xyaabbbccccdefww";
$b = "xxxxyyyyabklmopq";
$wanted = "abcdefklmopqwxy";
$sdsddd = "abcdefklmopqwxy";

function longest($a, $b){

    $result = '';

    $a = str_split($a);
    $b = str_split($b);

    $result = array_merge($a,$b);
    $result = array_unique($result);
    sort($result);
    $result = implode("", $result);

    return $result;
}

dd(longest($a,$b));