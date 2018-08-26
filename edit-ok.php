<?php
    require_once("connDB.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $id = $_POST["id"];

    $sql = "UPDATE `posts` SET title = '$title',content = '$content' WHERE id=".$id;
    mysqli_query($conn,$sql);
    
?>