<?php

include "helpers.php";


// function mix($s1, $s2) {
//   $split1 = str_split($s1);
//   $split2 = str_split($s2);
//   $split1_count = array_count_values($split1);
//   $split2_count = array_count_values($split2);
//   $result = "";
//   arsort($split1_count);
//   arsort($split2_count);
//   foreach($split1_count as $key => $val1){
//    if(ctype_lower($key)){
//     $val2 = @$split2_count[$key];

//     if($val1 > 1 || $val2 > 1){
//         if($val1 == $val2){
//          $char = str_repeat($key, $val1);
//          $result.= "=:$char/";
//         }else if($val1 > $val2){
//           $char = str_repeat($key, $val1);
//           $result.= "1:$char/";
//         }else if($val2 > $val1){
//          $char = str_repeat($key, $val2);
//          $result.= "2:$char/";
//         }
//     }
    
//    }
//   }
//   $result = rtrim($result, "/");
  
//   $ex_result = explode("/", $result);
//   sort($ex_result);
//   $result = implode("/", $ex_result);

//   return $result;
// }


function mix($s1, $s2) {
 $split1 = str_split($s1);
 $split2 = str_split($s2);
 $split1_count = array_count_values($split1);
 $split2_count = array_count_values($split2);
 $result = "";

 arsort($split1_count);
 arsort($split2_count);

 $maxLength = max(count($split1_count), count($split2_count));

 foreach(array_merge($split1_count, $split2_count) as $key => $val1) {
     if (ctype_lower($key)) {
         $val1 = @$split1_count[$key];
         $val2 = @$split2_count[$key];

         if ($val1 > 1 || $val2 > 1) {
             if ($val1 == $val2) {
                 $char = str_repeat($key, $val1);
                 $result .= "=:$char/";
             } else if ($val1 > $val2) {
                 $char = str_repeat($key, $val1);
                 $result .= "1:$char/";
             } else if ($val2 > $val1) {
                 $char = str_repeat($key, $val2);
                 $result .= "2:$char/";
             }
         }
     }
 }

 $result = rtrim($result, "/");

 $ex_result = explode("/", $result);

 // Custom sort function to sort by length and then lexicographically
 usort($ex_result, function($a, $b) {
     $lenA = strlen($a);
     $lenB = strlen($b);
     if ($lenA != $lenB) {
         return $lenB - $lenA; // Sort by length in descending order
     } else {
         return strcmp($a, $b); // If lengths are equal, sort lexicographically
     }
 });

 $result = implode("/", $ex_result);

 return $result;
}



// echo mix("aaabbbcccc", "aabbbccc") . br();
// echo mix("Are they here", "yes, they are here") . br();
// echo mix("looping is fun but dangerous", "less dangerous than coding") . br();
// echo "1:ooo/1:uuu/2:sss/=:nnn/1:ii/2:aa/2:dd/2:ee/=:gg".br();
echo mix(" In many languages", " there's a pair of functions") . br() . br();
echo "1:aaa/1:nnn/1:gg/2:ee/2:ff/2:ii/2:oo/2:rr/2:ss/2:tt" . br();


// var_dump((false||true));