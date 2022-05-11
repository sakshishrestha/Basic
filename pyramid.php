<?php 
$rowCount = 5;
$lCount = $rCount = $k = 0;

for($row =1; $row <= $rowcount; $row++){
    for($space = 1; $space <= $rowCount - $row; $space++){
        print "&nbsp;&nbsp;";
        $lCount++;
    }

    while ($k != 2 * $row -1){
        if($lCount <= $rowCount - 1){
            echo ($row + $k);
            $lCount++;
        }else{
            $rCount++;
            echo ($row + $k) - 2 * $rCount;
        }
        $k++;
    }
    $lCount = $rCount = $k = 0;
    print "</br>";
}

?>