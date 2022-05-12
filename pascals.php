<?php 
$rows = 5;
//$i for rows print - $j for column print - $k for the number print - logic is $num equation
for($i = 0;$i < $rows; $i++){
    $num = 1;

    for($k = $rows; $k > $i; $k--){
        print "&nbsp;&nbsp;";
    }

    for($j = 0; $j <= $i; $j++){
        print $num;
        // echo $i . " " . $j;

        if($j < $i){
            print "&nbsp;&nbsp;";
        }
        
        $num = $num * ($i - $j) / ($j + 1);
    }
    print "</br>";
}
?>