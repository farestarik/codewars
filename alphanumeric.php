<?php

include "helpers.php";


function alphanumeric(string $s):bool{  
  // $s = addslashes($s);
  if($s == ""){return false;}
  $cleaned = preg_match("/[^0-9a-zA-Z]/", $s, $exist);
  return !$cleaned;
}

var_dump(alphanumeric("hello world_")); // False
var_dump(alphanumeric("  ")); // False
var_dump(alphanumeric("PassW0rd")); // True
var_dump(alphanumeric("")); // False