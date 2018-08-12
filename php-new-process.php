<?php
    require_once("connDB.php");

    $name = $_POST["name"];
    $phone= $_POST["phone"];
    $mail = $_POST["mail"];
    $sql = "INSERT INTO `students`(name,phone,mail)VALUES('$name','$phone','$mail')";
    mysqli_query($conn,$sql);
    header("Location:php-mysql-2.php");
    // header("Refresh:5;url=php-mysql-1.php");
?>