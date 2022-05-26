<?php
//check leap year is multiple of four

// year % == 0 evenly divisibble by 4
// year % 100 != 0 should not be eveny divisible by 100
// or year % 400 == 0 evenly divisible by 400


function isLeapYear($year){
    if(!is_numeric($year)){
        echo "String is not allowed. Input should be a number.";
        return;
    }
    // var_dump((2022%100)); die();
    //check leap year 
    if(($year%4 == 0 && $year%100!=0) || $year%400 == 0){
      
        echo $year, " is a Leap year.";
    }else{
        echo $year, "is not a Leap year.";
    }
}

$year = 2022;
isLeapYEar($year);


?>