<?php
function binarySearch($arr, $value)
{
    $pos = -1;
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = ($left + $right) / 2;
        if ($arr[$mid] === $value) {
            $pos = $mid;
            break;
        }
        if ($value > $arr[$mid]) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return $pos;
}

$arrNumber = [1, 6, 7, 8, 12, 25, 30];
$x = binarySearch($arrNumber, 7);
var_dump($x);
if($x === -1){
    echo "khong tim thay so do";
}else{
    echo "tim thay ";
}
