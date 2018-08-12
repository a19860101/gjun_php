<?php
    require_once("connDB.php");
    $id = $_GET["id"];
    // echo $id;
    $sql = "DELETE FROM `students` WHERE id = ".$id;
    mysqli_query($conn,$sql);
    header("Location:php-mysql-2.php");
?>