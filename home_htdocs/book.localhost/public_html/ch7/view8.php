<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file_dir = "./data/";
    $file_path = $file_dir.$_FILES['upload']['name'];
    if(move_uploaded_file($_FILES['upload']['tmp_name'],$file_path)){
        $img_path = $file_dir.$_FILES['upload']['name'];
    }

    ?>
    <ul>
        <li><img src="<?=$img_path?>"></li>
        <li><?=nl2br($_POST['comment'])?></li>
    </ul>

</body>
</html>