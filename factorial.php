<?php 
// Program to find the factorial of a numnber 

// get factorial using loop

function getFact($n){
    if(!is_numeric($n)){
        echo "String is not allowed. Input should be a number ";
        return;
    }

    $factorial = 1;
    if($n == 0)
        return $factorial;
    for($i=$n; $i >= 1; $i--){
        $factorial = $factorial*$i;
    }
    return $factorial;
}

//get factorial using recursive function 

function getFactorial($n){
    if(!is_numeric($n)){
        echo "String is not allowed. Input should be a number";
        return;
    }

    if($n <= 1){
        return 1;
    }else {
        return $n*getFactorial($n-1);
    }
}

$n = 3; 

// $factorial = getFact($n);
$factorial = getFactorial($n);
echo "the factorial of $n is : ", $factorial; 
?>