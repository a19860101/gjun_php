<?php
    $user = "admin";
    $password = "admin";
    $host = "localhost";
    // $db = "gjun";
    $db = "blog";
    
    $conn = mysqli_connect($host,$user,$password)or die("資料庫連線錯誤");
    mysqli_select_db($conn,$db);
    mysqli_query($conn,"SET NAMES utf8");
?>