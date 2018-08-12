<?php
    require_once("connDB.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `students` WHERE id=".$id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <form action="php-update.php" method="post">
        <input type="text" name="name" placeholder="請輸入姓名" value="<?php echo $row["name"];?>">
        <input type="text" name="phone" placeholder="請輸入電話" value="<?php echo $row["phone"];?>"> 
        <input type="text" name="mail" placeholder="請輸入MAIL" value="<?php echo $row["mail"];?>">
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        <input type="submit" value="修改">
    </form>
</body>
</html>