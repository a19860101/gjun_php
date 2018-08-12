<?php
//members
    require_once("connDB.php");
    session_start();

    if(!isset($_SESSION["LEVEL"])){
        header("Location:login.php?errcode=2");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>會員</h1>
    <div><?php echo $_SESSION["USER"];?>你好</div>
</body>
</html>