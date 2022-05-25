<?php 
//Program to display first N prime numbers

function getPrimeNumbers($n){

    $status = true;
    $num = 3; 
    $prime_numbers = array();
    if($n >= 1){
        $prime_numbers[] = 2;
    }

    if($n > 1){
        for($i = 2; $i <= $n; ){

            for($j = 2; $j <= sqrt($num); $j++){
                if($num%$j == 0){
                    //$num is not a prime number
                    $status =false;
                    break;
                }
            }
            if($status){
                //$num is a prime number 
                $prime_numbers[] = $num;
                $i++; 
            }

            $status = true;
            $num++;
        }
    }

    return $prime_numbers;
}

$n = 4;
$prime_arr = getPrimeNumbers($n);
echo "<pre>"; print_r($prime_arr); 

?>