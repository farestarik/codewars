<?php

include "helpers.php";


function solve_expression(string $expression) {
      
   // Define a regular expression pattern to match operands and operator
   // $pattern = '/\s*([+\-*/])\s*|\s*(\d+)\s*/';
   $pattern = '#([+\-*/])|(\d+)#';

   // Use preg_match_all to find matches in the expression
   preg_match_all($pattern, $expression, $matches);

   // Extracted elements are in $matches[0]
   $elements = $matches[0];

   $operator = $elements[1];
   $operand1 = $elements[0];
   $operand2 = $elements[2];
   $result = $elements[3];

   if($result){
    if(!$operand1 && $operand2){
      if($operator == "+"){
        $operand1 = $result - $operand2;
      }else if($operator == "-"){
       $operand1 = $result + $operand2;
     }else if($operator == "*"){
      $operand1 = $result / $operand2;
     }else if($operator == "/"){
      $operand1 = $result * $operand2;
     }
    }
    if($operand1 && !$operand2){
     if($operator == "+"){
       $operand2 = $result - $operand1;
     }else if($operator == "-"){
      $operand2 = $result + $operand1;
    }else if($operator == "*"){
     $operand2 = $result / $operand1;
    }else if($operator == "/"){
     $operand2 = $result * $operand1;
    }
   }
   }



   // Output the result

   print_r($elements);

}

function solve_expressionss(string $expression){
   // Define the format string for sscanf
  $format = " %d%c%d=%d";

  // Use sscanf to extract values
  // list($operand1, $operator, $operand2, $result) = sscanf($expression, $format);

  sscanf($expression, $format, $operand1, $operator, $operand2, $result);

  // Reset $Vars
  $operand1 ??= NULL;
  $operator ??= NULL;
  $operand2 ??= NULL;
  $result ??= NULL;
  if($result){
   if(!$operand1 && $operand2){
     if($operator == "+"){
       $operand1 = $result - $operand2;
     }else if($operator == "-"){
      $operand1 = $result + $operand2;
    }else if($operator == "*"){
     $operand1 = $result / $operand2;
    }else if($operator == "/"){
     $operand1 = $result * $operand2;
    }
   }
   if($operand1 && !$operand2){
    if($operator == "+"){
      $operand2 = $result - $operand1;
    }else if($operator == "-"){
     $operand2 = $result + $operand1;
   }else if($operator == "*"){
    $operand2 = $result / $operand1;
   }else if($operator == "/"){
    $operand2 = $result * $operand1;
   }
  }
  }

  // // Output the results
  // echo "Operand1 :( $operand1 )" . br();
  // echo "Operator: ( $operator )" . br();
  // echo "Operand2 : ( $operand2 )" . br();
  // echo "Result: ( $result )" . br();

  return "$operand1 $operator $operand2 = $result";
}

pre_r(solve_expression('1+1=?'));
pre_r(solve_expression('2*?=6'));
pre_r(solve_expression('10/2=5'));
pre_r(solve_expression('50-25=25'));

// $str = "1+1=2";

// // pre_r(sscanf($str, "%d%s%d=%d"));
// list($number1, $operator, $number2, $result) = sscanf($str, "%d%s%d=%d");

// echo $number1 . br();
// echo $operator . br();
// echo $number2 . br();
// echo $result . br();

// $expression = " 1+1=2";
// $expression = "5*2=?";

