<?php


include 'helpers.php';



function sum_strings($a, $b) {
  $a = strrev($a);
  $b = strrev($b);

  $result = ''; // ok
  $carry = 0;

  $lenA = strlen($a); // ok
  $lenB = strlen($b); // ok
  

  $maxLength = max($lenA, $lenB); // ok

  for ($i = 0; $i < $maxLength; $i++) {
      $digitA = ($i < $lenA) ? (int)$a[$i] : 0; // ok
      $digitB = ($i < $lenB) ? (int)$b[$i] : 0; // ok

      $sum = $digitA + $digitB + $carry;
      
      $result .= $sum % 10; // Ok
      // $carry = intdiv($sum, 10);
      $carry = $sum >= 10 ? 1 : 0; // Ok
  }

  if ($carry > 0) {
      $result .= $carry; // Ok
  }

  return ltrim(strrev($result), 0); // ok
}


echo sum_strings('789','456'); // '579'


// echo intdiv(7 , 5);

// dd(20 % 10);