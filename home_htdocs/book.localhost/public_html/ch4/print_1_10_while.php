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
?>