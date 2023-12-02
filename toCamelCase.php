<?php

include "helpers.php";



function toCamelCase($str){
    $pattern = "/[-_,]/i";
    $str = preg_replace($pattern, "-" , $str);
    $items = explode("-", $str);
    $final_str = "";
    foreach($items as $key => $item){
        if($key == 0){
            if(ctype_upper($item)){
                $final_str .= ucfirst($item);
            }else{
                $final_str .= $item;
            }
        }else{
            $item = ucfirst($item);
            $final_str .= $item;
        }
    }
    return $final_str;
}

// function toCamelCase($str){
//     return str_replace(['_', '-', ' '], '', ucwords(' '.$str, '-_'));
//   }

echo toCamelCase("the_stealth_warrior") . br(); // Outputs: theStealthWarrior
echo toCamelCase("the-Stealth-Warrior") . br(); // Outputs: theStealthWarrior
echo toCamelCase("A-B-C") . br(); // Outputs: theStealthWarrior