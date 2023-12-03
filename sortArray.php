<?php

include "helpers.php";

function sortArray(array $arr) : array {
    $odd = array_filter($arr, function($num){
        return ($num % 2) !== 0;
    });
    asort($odd);
    $new_keys = array_reverse(array_keys($odd));
    $reseted_keys = array_values($odd);
    asort($reseted_keys);
    asort($new_keys);
    $new_odd = array_combine($new_keys, $odd);
    $arr = array_filter($arr, function($num){
        return ($num % 2) == 0;
    });
    $output = [];
    foreach(array_merge($new_odd, $arr) as $key => $value){
        if(key_exists($key, $new_odd)){
            $output[$key] = $new_odd[$key];
        }
        if(key_exists($key, $arr)){
            $output[$key] = $arr[$key];
        }
    }
    return $output;
}

// function sortArray(array $arr) : array {
//     $odds = array_filter($arr, fn($el) => $el & 1);
//     sort($odds);
//     return array_map(function($n) use (&$odds) {
//         if($n % 2 !== 0){
//            return array_shift($odds);
//         }else{
//             return $n;
//         }
//     }, $arr);
//   }

pre_r(sortArray([5, 8, 6, 3, 4])); // Outputs: [3, 8, 6, 5, 4]
pre_r(sortArray([7,1])); // Outputs: [1,7]
pre_r(sortArray([1,7])); // Outputs: [1,7]
// $arr = [1,3,2,8,5,4,11];
$arr = [11,1,2,8,3,4,5];
pre_r(sortArray($arr)); // Outputs: [1,3,2,8,5,4,11]

// echo 4 & 1;