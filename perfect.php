<?php 
//to find the given number is perfect number or not 

function isPerfectNumber($num){
    $sum = 0; 
    
    for($i = 1; $i < $num; $i++){
        if ($num % $i == 0){
            $sum = $sum + $i;
        }
    }

    //if sum equals to the original number than return true 

    return $sum == $num;

}

$number = 5; 

if(isPerfectNumber($number)){
    echo $number, "is a perfect number";
}else{
    echo $number, "is not a perfect number";
}