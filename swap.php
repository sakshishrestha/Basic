<?php 
//php program to swap two numbers without third variable 

$a = 4;
$b = 5;

echo "a before swapping : ", $a , "</br>";
echo "b before swapping : ", $b ,  "</br></br>";

$a = $a + $b ; 
$b = $a - $b ; 
$a = $a - $b ;

echo "a after swapping : ", $a , "</br>";
echo "b after swapping : ", $b , "</br>";
