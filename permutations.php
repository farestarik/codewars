<?php

include "helpers.php";



// function permutations(string $s): array {
   
//     $split = str_split($s);

    

//    return [];
// }


function permutations(string $input): array {
   $result = [];
   $length = strlen($input);
   $split = str_split($input);

   // Base case: if there's only one character, return an array with that character
   if ($length == 1) {
       return [$input];
   }

   // Iterate through each character
   for ($i = 0; $i < $length; $i++) {
       // Remove the current character from the string
       $char = $split[$i];
      
       $remainingChars = substr($input, 0, $i) . substr($input, $i + 1);
       unset($split[$i]);
       $remainingChars = implode("", $split);
       dd($remainingChars);

      
       // Recursively generate permutations for the remaining characters
       $permutations = permutations($remainingChars);

       // Prepend the current character to each permutation
       foreach ($permutations as $permutation) {
           $result[] = $char . $permutation;
       }
   }

 return array_unique($result);
}

pre_r(permutations("ab"));

