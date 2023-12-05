<?php

include "helpers.php";

function phone($str, $num){
    // Clean String From Any UnWanted Characters
    $cleaned = preg_replace("/[^-0-9a-zA-Z+\s\n<>.']/", " ", $str);
    
    // Explode The Cleaned String By \n Separator
    $exploded = explode("\n", $cleaned);

    // PhoneNum Pattern
    $num_pattern = "/\\+$num/";

    // Get All People With This PhoneNum
    $people_with_phone = preg_grep($num_pattern, $exploded);

    // Handle Error Messages

    if(count($people_with_phone) == 0){
        return "Error => Not found: ".$num;
    }
    if(count($people_with_phone) > 1){
        return "Error => Too many people: ".$num;
    }

    // Replace Number

    $str_without_num = preg_replace($num_pattern, " ", $people_with_phone[array_keys($people_with_phone)[0]]);
    
    // name

    $name_pattern = "/<(.*)>/";

    preg_match($name_pattern, $str_without_num, $name);

    $name = trim($name[1]);

    // address

    $str_without_name = preg_replace($name_pattern, " ", $str_without_num);

    $address_pattern = "/[ ]{2,}/";
    $address = trim(preg_replace($address_pattern, " ", $str_without_name));

    return "Phone => ".$num.", Name => ".$name.", Address => ". $address;
}









$s = "/ +1-541-754-3010 156 Alphand_St. <J Steeve>\n
       133, Green, Rd. <E Kustur> NY-56423 ;+1-541-914-3010!\n";
pre_r(phone($s, "1-541-754-3010"));