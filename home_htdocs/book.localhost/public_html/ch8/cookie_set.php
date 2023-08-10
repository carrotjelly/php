<?php

    $a = setcookie("userid","rubato","");
    $b = setcookie("username","김채린",time()+60);

    if($a && $b){
        echo "쿠키 'userid'와 'username' 생성 완료!<br>";
        echo "username은 60초간 지속됩니다.";
    }

?>
