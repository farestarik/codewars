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

pre_r($nums);
// pre_r($wanted_result);
pre_r(fix($nums));


// var_dump(new SVMModel);

// $nums = array(1,5,8,0,4,3);

// $sum = array_sum($nums);

// $count = count($nums);

// $avr = $sum / $count;

// // echo $avr;


// if($sum < end($nums))
// {
// $c = end($nums)+ ($sum/2);
// echo $c;
// }


// $a = array(1,5,8,0,4,3);

// $b = array_sum($a);

// if($b < end($a))
// {
// $c = end($a)+ ($b/2);
// echo $c;
// }