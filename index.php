<?php


include 'helpers.php';


$all_files = glob("*");
foreach($all_files as $file){
    echo "<a href='$file'>".$file."</a>" . br();
}