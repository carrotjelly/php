<?php
   include "func_include.php";

    $start = 1;
    $end = 100;
    $total = sum($start,$end);
    echo "$start 부터 $end 까지의 값의 합 : $total<br><br>";
    
    
    $num = 6;
    $total = sum_f($start,$end,$num);// $num의 배수의 합
    echo "$start 부터 $end 까지의 숫자 중 $num 의 배수의 합 : $total";


?>