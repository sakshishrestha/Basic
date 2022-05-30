<?php 
// program to print alphabetic pattern 

$k = 65; // ASCII value of A is 65

for($i = 1; $i <=5; $i++){
    for($j = 1; $j <=$i; $j++){
        echo chr($k), " ";
        $k++; // prints A - 0 in triangle pattern 
    }
    // $k++; // print same character in triangle pattern 
    echo "<br>";  
    
}