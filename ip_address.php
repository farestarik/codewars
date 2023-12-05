<?php

include "helpers.php";



function ips_between ($start, $end) {
    $start_parts = array_map(function($part){ return $part = (int)($part); }, explode(".", $start));
    $end_parts = array_map(function($part){ return $part = (int)($part); }, explode(".", $end));

    if((count($start_parts) !== 4) || count($end_parts) !== 4){
        return "Invalid IP Address!";
    }
   
    $start_decimal = ($start_parts[0] * (256**3))
                    +($start_parts[1] * (256**2))
                    +($start_parts[2] * (256**1))
                    +($start_parts[3] * (256**0));

    $end_decimal = ($end_parts[0] * (256**3))
                    +($end_parts[1] * (256**2))
                    +($end_parts[2] * (256**1))
                    +($end_parts[3] * (256**0));                      
    
    return abs($end_decimal - $start_decimal);
    
}

// function ips_between ($start, $end) {

//     $startDecimal = ip2long($start);
//     $endDecimal = ip2long($end);

//     $count = $endDecimal - $startDecimal;

//     return $count;
// }


echo ips_between("150.0.0.0", "150.0.0.1") . br();
echo ips_between("150.0.0.0", "150.0.1.0") . br();
echo ips_between("10.0.0.0", "10.0.0.50") . br();
echo ips_between("20.0.0.10", "20.0.1.0") . br();