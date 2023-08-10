<?php
function sum($a, $b)
{
    $total = 0;
    while ($a <= $b) {
        $total += $a;
        $a++;
    }
    return $total;
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