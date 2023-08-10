<?php
function sum($a, $b)
{
    $sum = 0;
    while ($a <= $b) {
        $sum += $a;
        $a++;
    }
    return $sum;
}
function sum_f($a, $b, $num)
{
    $sum = 0;
    while ($a <= $b) {
        if ($a % 6 == 0) {
            $sum += $a;
        }
        $a++;
    }
    return $sum;
}


?>