<?php
//admin
    require_once("connDB.php");
    session_start();

    if($_SESSION["LEVEL"]!=0 || !isset($_SESSION["LEVEL"])){
        header("Location:login.php?errcode=3");
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
    <h1>管理者</h1>
    <div><?php echo $_SESSION["USER"];?>你好</div>
</body>
</html>