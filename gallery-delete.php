<?php
    require_once("connDB.php");

    $id = $_GET["id"];
    $name = $_GET["name"];
    // $sql = "SELECT * FROM `gallery` WHERE id = $id";
    // $reuslt = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);
    // echo $row["name"];
    unlink("images/".$name);
    $sql = "DELETE FROM `gallery` WHERE id=".$id;
    mysqli_query($conn,$sql);

    header("Location:gallery.php");
?>