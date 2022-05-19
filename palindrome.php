<?php 
//Palindrome Number Program

function isPalindromeNum($number){
    $temp = $number;
    $newNum = 0; 
    while(floor($temp)){
        $rem = $temp%10; //343%10 = 3
        $newNum = $newNum*10 + $rem;
        $temp = $temp/10; //343/10 = 34
    }
    //palindrome
    if($newNum == $number)
        return true;
    //not palindrome
    return false;
}

$no = 454;
$is_palindrome = isPalindromeNum($no);


if($is_palindrome)
    echo "Palindrome";
else
    echo "Not Palindrome";
?>