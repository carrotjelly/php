<?php
for($i = 0; $i < 8; $i++){
    $a[$i] = $i + 2;
    echo $a[$i].", ";
}

echo "<br>\$a 배열값 : ";
print_r($a);
echo "<br>";

for($i = 0; $i < 9; $i++){
    $b[$i] = $i + 1;
    echo $b[$i].", ";
}

echo "<br>\$b 배열값 : ";
print_r($b);
echo "<br><br>";

echo "구구단<br>";
for($i = 0; $i < sizeof($a); $i++){
    echo "---------- $a[$i]단 ------------<br>";
    for($j = 0; $j < sizeof($b); $j++){
        $c = $a[$i] * $b[$j];
        echo "$a[$i] * $b[$j] = $c<br>";
    }
}



?>