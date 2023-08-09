<?php
$i = 1;
$sum = 0;
$sum2 = 0;
while ($i <= 100) {
    if($i % 3 != 0){
        $sum = $sum + $i;
    }
    else{
        $sum2 += $i;
    }
    $i++;
}
echo "1~100까지의 정수 중 3의 배수가 아닌 수의 합 : $sum<br>";
echo "1~100까지의 정수 중 3의 배수의 합 : $sum2<br>";
?>