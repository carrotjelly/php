<?php
$sum = 0;
$sum2 = 0;
for($i = 1; $i<=100; $i++){
    if($i % 5 == 0){
        $sum = $sum + $i;
    }
    else{
        $sum2 += $i;
    }
}
echo "1~100까지의 정수 중 5의 배수의 합 : $sum<br>";
echo "1~100까지의 정수 중 5의 배수가 아닌 수의 합 : $sum2<br>";
?>