<?php
    if(isset($_COOKIE['userid']) && isset($_COOKIE['username'])){
        $userid = $_COOKIE['userid'];
        $username = $_COOKIE['username'];
        echo "userid 쿠키 : ".$userid."<br>";
        echo "username 쿠키 : ".$username."<br>";
    }else{
        echo "username 쿠키가 60초가 지나서 지워졌습니다.";
    }

    session_start();
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];

    echo "userid 세션: ".$userid."<br>";
    echo "username 세션: ".$username."<br>";

?>