<?php
$a = setcookie("userid","",time()-3600);
$b = setcookie("username","",time()-3660);
if($a && $b){
    echo "쿠키 'userid'와 'username' 삭제 완료!<br>";
}

session_start();
unset($_SESSION['userid']);

echo "세션 삭제 완료<br>";
if(isset($_SESSION['userid'])){
    echo $_SESSION['userid']."<br>";
}
if(isset($_SESSION['username'])){
    echo $_SESSION['username']."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>
</body>
</html>