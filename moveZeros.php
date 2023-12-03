<?php

include "helpers.php";


function moveZeros(array $items): array
{
    $zeros = array_filter($items, fn($item) => ($item == 0 && $item !== false && $item !== null));
    $zeros_keys = array_keys($zeros);
    foreach($zeros_keys as $key){
        unset($items[$key]);
    }
    foreach($zeros as $zero){
        $zero = round($zero);
        array_push($items, 0);
    }
    return array_values($items);
}


// function moveZeros(array $items): array
// {
//     $without_zeros = array_filter(
//         $items, function($x) {return $x !== 0 and $x !== 0.0;}
//     );
//     return array_pad($without_zeros, count($items), 0);
// }

// pre_r(moveZeros([false,1,0,1,2,0,1,3,"a"]));
// pre_r(moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));
pre_r(moveZeros([1,2,0,1,0,1,0,3,0,1]));