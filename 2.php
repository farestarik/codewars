<?php

include 'helpers.php';


function lovefunc($flower1, $flower2) {
    // moment of truth
    
    $in_love = false;

    if($flower1 % 2 == 0){
        if($flower2 % 2 !== 0){
            $in_love = true;
        }
    }
    if($flower2 % 2 == 0){
        if($flower1 % 2 !== 0){
            $in_love = true;
        }
    }
    
   return $in_love;
  
}

echo lovefunc(4,4);