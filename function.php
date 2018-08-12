<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
       function eat($a,$b){
            echo "今天".$a."吃".$b."<br>";
       }
       eat($a,$b);
    //    eat("早餐","雞肉飯");
    //    eat("中餐","牛肉麵");

    ?>
</body>
</html>