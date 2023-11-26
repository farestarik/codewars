<?php

include "helpers.php";


function makeUpperCase(string $input): string {
    $string = '';
    $chars = str_split($input);
    foreach($chars as $char){
        if(ctype_lower($char)){
            $string .= chr(ord($char) - 32);
        }else{
            $string .= $char;
        }
    }
    return $string;
}

echo makeUpperCase("hello"); // Expected: HELLO , Output: 

// dd(ord("E"));