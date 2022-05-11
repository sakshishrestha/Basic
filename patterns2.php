<?php
/*
Print the patterns 
        * as traingular pyramid
*/
$n = 4;
for ($i= 1; $i <= $n; $i++){
    for ($j=1; $j <=(2*$n)-1; $j++){
        if($j >= $n-($i-1) && $j <= $n+($i-1)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "</br>";
}
//heart shape pattern in PHP 
// $n = 6;
for ($r = 1; $r < 6; $r++){
    for($c =0; $c < 7;$c++){
        if(($r == 0 && $c%3!=0) || ($r == 1 && $c%3==0) || ($r-$c == 2) || ($r+$c == 8)) {
            echo "*";
        }else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "</br>";
}
//Pyramid Number Pattern

$rows = 4;
$n = 1;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo $n, "&nbsp;&nbsp;";
        $n++;
    }
    echo "</br>";
}

//Pyramid Number System with spaces
$rows = 4;
$n = 1;
for($i = 1; $i <= $rows; $i++){
    for ($k = $rows; $k > $i; $k--){
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++){
        echo $n, "&nbsp;&nbsp;";
        $n++;
    }
    echo "</br>";
}
?>


