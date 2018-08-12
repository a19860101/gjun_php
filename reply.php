<?php
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $edu = $_POST["edu"];
    $hobby = $_POST["hobby"];
    // foreach($hobby as $h){
    //     echo $h;
    // }
    $h = implode(",",$hobby);
    echo $h;
    $content = $_POST["content"];
    echo $user;
    echo $mail;
    echo $edu;
    echo $content;
    // echo $hobby;
?>