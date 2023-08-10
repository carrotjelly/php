<?php
$score = array(
    array(88,98,96,77,63),
    array(86,77,66,86,93),
    array(74,83,95,86,97,34),
    array(55,66,93,23,88),
    array(66,87,55,55,66,79)
);

for($i=0; $i<sizeof($score); $i++){
    $sum = 0;
    for($j = 0; $j < sizeof($score[$i]); $j++){
        $sum += $score[$i][$j];
    }
    //echo "$score[$i][$j]<br>";
    
    $avg = $sum / sizeof($score[$i]);
    $std_num = $i + 1;
    echo "$std_num 번 학생의 점수 => 합계 : $sum, 평균 : $avg<br>";
}

?>