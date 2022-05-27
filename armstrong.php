<?php 

function isArmstrong($number){
    $sum = 0; 
    $temp = $number;

    while($temp!=0){
        $rem = $temp%10;
        $sum = $sum + $rem*$rem*$rem;
        $temp = $temp/10;
    }

    if($sum == $number){
        return true;
    }else{
        return false;
    }
}

$num = 407;
$is_armstrong = isArmstrong($num);

if($is_armstrong){
    echo $num . "armstrong";
}else{
    echo $num  . "not armstrong";
}

