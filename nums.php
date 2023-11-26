<?php

include 'helpers.php';

$nums = [8, 5 , 10, 2, 7];
$wanted_result = [8, 8 , 10, 10, 7];

// $nums = [3, 2 , 5, 1, 7];
// $wanted_result = [3, 3 , 5, 5, 7];


function fix(array $nums){ 
    foreach($nums as $key => $num){
        $prev_num = @$nums[$key - 1];

        if($prev_num <= $num || $prev_num == null){
            $nums[$key] = $num;
        }else{
            $new_num = ($prev_num - $num) + $num;
            $nums[$key] = $new_num;
        }
    }
    return $nums;
}