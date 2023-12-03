<?php

include "helpers.php";


function encryptThis($text) : string
{
    $words = explode(" ", $text);
    $output = "";
    foreach($words as $key => $word){
        $arr = str_split($word);
        $arr[0] = ord($arr[0]);
        $need = array_filter($arr, function($val, $key) use($arr){
            return ($key == 1 || $key == (count($arr) - 1));
        }, ARRAY_FILTER_USE_BOTH);
        $need_keys = array_reverse(array_keys($need));
    
        $new_need = array_combine($need_keys, array_values($need));
        foreach($new_need as $key => $value){
            $arr[$key] = $value;
        }
        if($key == (count($words) - 1)){
            $output.= implode("", $arr);
        }else{
            $output.= implode("", $arr) . " ";
        }
    }
    return trim($output);
}

// pre_r(encryptThis("Hello"));
// echo encryptThis("hello world");
// var_dump(encryptThis("hello world") === "104olle 119drlo");
// echo strlen(encryptThis("A"));
echo strlen(encryptThis("A wise old owl lived in an oak")) . br();

echo strlen("65 119esi 111dl 111lw 108dvei 105n 97n 111ka") . br();
// echo strlen("65 119esi 111dl 111lw 108dvei 105n 97n 111ka ") . br();

