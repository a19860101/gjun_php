<?php
    require_once("connDB.php");
    $user = $_POST["user"];
    $pw = $_POST["pw"];

    $sql = "INSERT INTO `members`(user,pw)VALUES('$user','$pw')";
    mysqli_query($conn,$sql);
    header("Location:login.php");
?>