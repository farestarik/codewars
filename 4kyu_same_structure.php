<?php


include "helpers.php";


// function same_structure_as(array $a, array $b): bool {

//   if(count($a) !== count($b)){
//     return false;
//   }
  
//   if(!is_array($a) || !is_array($b)){
//     return false;
//   }

//   foreach($a as $key => $a_val){
//     $b_val = $b[$key];
//     if(is_array($a_val) && is_array($b_val)){
//        if(!same_structure_as($a_val, $b_val)){
//          return false;
//        }
//     }elseif(is_array($a_val) || is_array($b_val)){
//      return false;
//     }
//   }

//   return true;

// }


function same_structure_as(array $a, array $b): bool{
  // Check If Not Arrays
  if(!is_array($a) && !is_array($b)){
    return false;
  }

  // Check For Childs Count
  if(count($a) !== count($b)){
    return false;
  }

  foreach($a as $key => $a_val){
    $b_val = $b[$key];

    if(is_array($a_val) && is_array($b_val)){
      if(!same_structure_as($a_val, $b_val)){
        return false;
      }
    }else if(is_array($a_val) || is_array($b_val)){
     return false;
    }
    
  }

  return true;

}


var_dump(same_structure_as([1, 1, 1], [2, 2, 2])); // True
var_dump(same_structure_as([1, 1, [1]], [2, 2, 2])); // False
var_dump(same_structure_as([1, 1, 1], [2, 2, 2])); // True
var_dump(same_structure_as([1, [1, 1]], [[2, 2], 2])); // False