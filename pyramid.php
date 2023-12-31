<?php

include "helpers.php";


function pyramid($n) {
    if($n < 0){
        return [];
    }
    $output = [];
    for($i = 0; $i < $n; $i++){
        $output[$n][] = array_fill(0, $i + 1, 1);
    }
    return array_merge(...$output);
}

// function pyramid($n) {
//     $array = [];
//     for ($i = 1; $i <= $n; $i++) {
//       $array[] = array_fill(0, $i, 1);
//     }
//     return $array;
  
// }


pre_r(pyramid(0));
pre_r(pyramid(1));
pre_r(pyramid(2));
pre_r(pyramid(3));