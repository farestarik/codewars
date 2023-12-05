<?php

include "helpers.php";


function rgb($r,$g,$b){
    $red = max(0, min(255, $r));
    $green = max(0, min(255, $g));
    $blue = max(0, min(255, $b));
    // Convert each component to hexadecimal and concatenate
    $hex = sprintf("%02X%02X%02X", $red, $green, $blue);
    return $hex;
}


echo rgb(255,155,0);
