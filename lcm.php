<?php 

//Program to find the HCF two numbers

function getHCF($num1, $num2){
    if ($num2 == 0)
        return $num1;
    if($num2!= 0) 
        // var_dump($num1,$num2,$num1%$num2); die();
        return getHCF($num2, $num1%$num2);
}
//function to find the LCM 

function getLCM($a, $b){
    $hcf = getHCF($a, $b);
    $lcm = ($a*$b)/$hcf;
    return $lcm;  
}

$n1 = 15;
$n2 = 25;

echo "LCM of $n1 and $n2 is :", getLCM($n1, $n2);
?>