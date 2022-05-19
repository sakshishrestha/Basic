<?php 
// Binary search program


function binarySearch(Array $arr, $num){
    // if array does not has elements 
// print_r(count($arr));
// die('here');
    if(count($arr) === 0)
        return false;
    $low = 0; 
    $high = count($arr)-1;

    while($low <= $high){
        $mid = floor(($low+$high)/2);

        //if middle elements matches the number 
        if($num == $arr[$mid]){
            return true;
        }

        if ($num < $arr[$mid]){
            //search element in left side 
            $high = $mid-1;
        }else{
            //search element in right side 
            $low = $mid+1;
        }
    }
    //if we reach here that means number does not exist
    return false;
}

$num_arr = array(1, 2, 4, 6, 9, 12);

$num_to_find = 9;

if(binarySearch($num_arr, $num_to_find)){
    echo $num_to_find, " exists in the list";
}else{
    echo $num_to_find, " does not exist in the list";
}
?>