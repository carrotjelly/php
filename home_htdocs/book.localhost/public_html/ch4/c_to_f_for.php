<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
    td,th{
        width: 100px;
        text-align: center;
    }
</style>
<body>
    <h3>섭씨 -> 화씨 온도 변환</h3>
    <table border = "1">
        <tr>
            <th>섭씨</th>
            <th>화씨</th>
        </tr>
        <?php
            $f = 0;
            for($i = -15; $i<=35; $i+=5){
                $f = ($i * 9/5) + 32;
                echo "<tr> <td> $i </td> <td> $f </td> </tr>";
            }

        ?>
    </table>

    
</body>    
</html>


