<?php 
//Program to find the hcf of two numbers

function getHCF($num1, $num2){
    if($num2 == 0)
        return $num1;
    if($num2!= 0)
    var_dump($num1%$num2);die();
        return getHCF($num2, $num1%$num2);
}

$a = 15; 
$b = 25;
$hcf = getHCF($a, $b);

echo "HCF of $a and $b is :", $hcf;

?>