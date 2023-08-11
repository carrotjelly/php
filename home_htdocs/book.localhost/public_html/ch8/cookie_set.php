<?php

    $a = setcookie("userid","rubato","");
    $b = setcookie("username","김채린",time()+60);

    if($a && $b){
        echo "쿠키 'userid'와 'username' 생성 완료!<br>";
        echo "username은 60초간 지속됩니다.<br>";
    }

    session_start();
    $_SESSION['userid'] = "ocella";
    $_SESSION['username'] = "박영준";

    echo "세션 등록 완료<br>";
    echo $_SESSION['userid']."<br>";
    echo $_SESSION['username']."<br>";


?>
