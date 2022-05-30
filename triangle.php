<?php 

$rows = 5;

for($i = 1; $i <=$rows; $i++){
    for($k = $i; $k = $rows; $k++){
        print "&nbsp;&nbsp";
    }

    for($j = 1; $j <=(2* $i -1); $j++){
        if($j == 1 || $i == $rows || $j == (2 * $i - 1)){
            print "*";
        } else {
            print "&nbsp;&nbsp;";
        }
    }
    print "<br>";
}

?>