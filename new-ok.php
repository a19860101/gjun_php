<?php
    require_once("connDB.php");
    $title = $_POST["title"];
    $content = nl2br($_POST["content"]);

    $sql = "INSERT INTO `posts`(title,content,date)VALUES('$title','$content',NOW())";
    mysqli_query($conn,$sql);

    // header("Location:index.php");
?>