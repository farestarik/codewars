<?php


include 'helpers.php';


$all_files = glob("*");
$minus = 4;

echo (count($all_files) - 4) . br();

foreach($all_files as $file){
    echo "<a href='$file'>".$file."</a>" . br();
}