<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $table = $_GET['table'];   
        $type = $_GET['type'];
        if($table == "free"){
            $table = "자유게시판";
        }
    ?>
    <h3><?=$table?> | <?=$type?></h3>
</body>
</html>