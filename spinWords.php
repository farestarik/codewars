<?php

include "helpers.php";


function spinWords(string $str): string {
    $words = explode(" ", $str);
    $words = array_map(function($word) {
        if(strlen($word) >= 5){
            return strrev($word);
        }else{
            return $word;
        }
    }, $words);

    return implode(" ", $words);
}

echo spinWords("Welcome") . br(); // Outputs: emocleW
echo spinWords("Hey fellow warriors") . br(); // Outputs: Hey wollef sroirraw