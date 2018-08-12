<?php
    require_once("connDB.php");
    $delete = $_POST["delete"];
    // echo $del;
    foreach($delete as $del){
        echo $del . ",";
        mysqli_query($conn,"DELETE FROM `students` WHERE id = ".$del);
        header("Location:php-mysql-3.php");
    }
?>