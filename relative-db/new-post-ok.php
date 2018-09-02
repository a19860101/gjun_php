<?php
    require_once("../connDB.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $member_id = $_POST["member_id"];
    $category_id = $_POST["category_id"];
    $sql = "INSERT INTO `posts` (title,content,postDate,member_id,category_id)
            VALUES('$title','$content',NOW(),'$member_id','$category_id')";
    mysqli_query($conn,$sql);
    header("Location:index.php");
?>