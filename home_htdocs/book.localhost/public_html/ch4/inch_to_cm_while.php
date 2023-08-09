<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    td,th{
        width: 80px;
        border: 1px solid black;
        text-align: center;
    }
</style>
<body>
    <table>
        <tr>
            <th>인치</th>
            <th>센티미터</th>
        </tr>
        <?php
            $i = 1;
            $inch = 0;
            $cm = 0;
            // for($i; $i<=10; $i++){
            //     $inch = $i * 10;
            //     $cm = $inch * 2.54;
            //     echo "<tr> <td> $inch </td> <td> $cm </td> </tr>";
            // }
            while($i <= 10){
                $inch = $i * 10;
                $cm = $inch * 2.54;
                echo "<tr> <td> $inch </td> <td> $cm </td> </tr>";
                $i++;
            }

        ?>
    </table>

    
</body>    
</html>


