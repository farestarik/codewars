<?php

function pre_r($data){ 
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


function dd($data){
    pre_r($data);
    exit;
}

function br(){
    echo "<br>";
}