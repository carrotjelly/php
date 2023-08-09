<?php
for ($i = 1; $i <= 10; $i++) {
    for ($k = 9; $k >= $i; $k--){
        echo "&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>