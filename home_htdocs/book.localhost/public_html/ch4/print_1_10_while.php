<?php
$i = 1;
$sum = 0;
while ($i <= 10) {
    echo "$sum + ";
    echo "$i = ";
    $sum = $sum + $i;
    echo "$sum <br>";
    
    $i++;
}



echo "100~300까지의 정수 중 3의 배수의 합 : $sum<br>";
?>