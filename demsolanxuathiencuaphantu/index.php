<?php
function countNumber($number, $value)
{
    $count = 0;
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] === $value) {

            $count++;
        }
    }
    echo "so lam xuat " . $value . " hien trong mang " . $count;
}
$arrayNumber = [1, 2, 5, 36, 8, 45, 9, 43, 1, 45, 1, 5, 3];
countNumber($arrayNumber, 5);
