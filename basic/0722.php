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
        $a = 100;
        // switch($a){
        //     case 100:
        //         echo 100;
        //         break;
        //     case 200:
        //         echo 200;
        //         break;
        //     default:
        //         echo "請輸輸入正確的數值";

        // }
        switch(true){
            case $a>100:
                echo "大於";
                break;
            case $a<100:
                echo "小於";
                break;
            default:
                echo "error";

        }
    ?>
</body>
</html>