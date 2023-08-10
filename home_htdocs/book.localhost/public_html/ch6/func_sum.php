<?php
    function sum($a, $b){
        $sum = 0;
        while($a <= $b){
          $sum += $a;
          $a++; 
        }
        return $sum;
    }

    $start = 1;
    $end = 100;
    $total = sum($start,$end);
    echo "$start 부터 $end 까지의 값의 합 : $total"


?>