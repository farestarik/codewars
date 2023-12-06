<?php

include "helpers.php";

function flap_display($lines, $rotors){
 $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ ?!@#&()|<>.:=-+*/0123456789';
 $chars_split = str_split($characters);

 $result = [];
 $new_line = [];

 foreach($lines as $lkey => $line){
    $rotor = $rotors[$lkey];
    $split = str_split($line);
    foreach($rotor as $key => $flap){
       foreach($split as $skey => $char){  
          $current_pos_in_chars_split = strpos($characters, $char);
          $new_pos_in_chars_split = ($current_pos_in_chars_split + $flap) % count($chars_split);
          $split[$skey] = $chars_split[$new_pos_in_chars_split];
        }
        $new_line[] = $split[$key];
        unset($split[$key]);
    }
    $result[$lkey] = implode("", $new_line);
    unset($new_line);
 }
  return $result;
}


pre_r(flap_display(["CAT"], [[1,13,27]]));
pre_r(flap_display(["CAT", "DOG"], [[1,13,27],[1,13,27]]));
