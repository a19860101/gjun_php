<?php
    require_once("connDB.php");
    session_start();
    if($_POST["user"]=="" || $_POST["pw"]=="" ){
        echo "請輸入帳號密碼";
    }else{
        // if(isset($_POST["user"]) && isset($_POST["pw"])){

            $user = $_POST["user"];
            $pw = $_POST["pw"];

            $sql = "SELECT * FROM `members` WHERE user= '$user'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if($pw == $row["pw"]){
                //密碼正確
                echo  "success";
            }else{
                //帳號或密碼錯誤
                echo "error";
            }
        // }
    }
?>