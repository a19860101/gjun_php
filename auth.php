<?php
    require_once("connDB.php");
    session_start();
    if($_POST["user"]=="" || $_POST["pw"]=="" ){
        // echo "請輸入帳號密碼";
        header("Location:login.php?errcode=0");
    }else{
        // if(isset($_POST["user"]) && isset($_POST["pw"])){

            $user = $_POST["user"];
            $pw = $_POST["pw"];

            $sql = "SELECT * FROM `members` WHERE user= '$user'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if($pw == $row["pw"]){
                //密碼正確
                // echo  "success";
                $_SESSION["USER"] = $row["user"];
                $_SESSION["LEVEL"] = $row["level"];
                if($_SESSION["LEVEL"]==0){
                    header("Location:admin.php");
                }else{
                    header("Location:members.php");
                }
                // switch($_SESSION["LEVEL"]){
                //     case 0:
                //         $_SESSION["LEVEL"] = "管理員";
                //         break;
                //     case 1:
                //         $_SESSION["LEVEL"] = "一般會員";
                //         break;
                // }
                #echo $_SESSION["USER"]."你好，您的權限為".$_SESSION["LEVEL"];
            }else{
                //帳號或密碼錯誤
                // echo "error";
                header("Location:login.php?errcode=1");
            }
        // }
    }
?>