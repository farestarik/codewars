<?php

include 'helpers.php';


function likes( $names ) {

    if(empty($names)){
        return "no one likes this";
    }

    $msg = "";
    $count = count($names);
    if(count($names) == 1){
        $msg = current($names) . ' likes this';
    }

    if(count($names) == 2){
        $msg = current($names) . ' and ' . end($names) . ' like this';
    }
    
    if(count($names) == 3){
        $msg = current($names) . ', ' . next($names) . ' and ' . end($names) . ' like this';
    }

    if(count($names) > 3){
        $count = $count - 2;
        $msg = current($names) . ', ' . next($names) . ' and ' . $count . ' others like this';
    }
    
    return $msg;
}


echo likes( [] ) . br(); // Expected: no one likes this
echo likes( [ 'Peter' ] ) . br(); // Expected: Peter likes this
echo likes( [ 'Jacob', 'Alex' ] ) . br(); // Expected: Jacob and Alex like this
echo likes( [ 'Max', 'John', 'Mark' ] ) . br(); // Expected: Max, John and Mark like this
echo likes( [ 'Alex', 'Jacob', 'Mark', 'Max' ] ) . br(); // Expected:  Alex, Jacob and 2 others like this