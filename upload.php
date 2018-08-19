<?php
    require_once("connDB.php");
    $pic_name = $_FILES["pic"]["name"];
    $pic_size = $_FILES["pic"]["size"];
    $tmpname = $_FILES["pic"]["tmp_name"];
    $error = $_FILES["pic"]["error"];
    $target = "images/".$pic_name;
    $max_size = 3*1024*1024;//3MB

    $pic_name_base = pathinfo($pic_name,PATHINFO_BASENAME);//完整檔名
    $pic_name_ext = strtolower(pathinfo($pic_name,PATHINFO_EXTENSION));//副檔名
    $pic_name_file = pathinfo($pic_name,PATHINFO_FILENAME);//檔名
    $pic_name_dir = pathinfo($pic_name,PATHINFO_DIRNAME);//資料夾名稱

    // echo $pic_name_base . "<br>";
    // echo $pic_name_ext . "<br>";
    // echo $pic_name_file . "<br>";
    // echo $pic_name_dir . "<br>";

    $sql = "INSERT INTO `gallery`(name)VALUES('$pic_name')";

    if($pic_name_ext!="jpg" && $pic_name_ext!="png" && $pic_name_ext!="gif" && $pic_name_ext!="jpeg"){
        // echo "error";
        $up = 1;
    }
    if($pic_size > $max_size) {
        // echo "檔案過大，須小於3MB";
        $up = 2;
    }
    if($error==4){
        // echo "empty";
        $up = 3;
    }
    if(file_exists(basename("images/".$pic_name))){
        $up = 4;
    }
    if(isset($up)){
        switch($up){
            case 1:
                header("Location:file.php?upload=1");
                break;
            case 2:
                header("Location:file.php?upload=2");
                break;
            case 3:
                header("Location:file.php?upload=3");
                break;
            case 4:
                header("Location:file.php?upload=4");
                break;
        }
    }else{
        if(move_uploaded_file($tmpname,$target)){
            header("Location:file.php?upload=0");
                mysqli_query($conn,$sql);
            }else{
                header("Location:file.php?upload=5");
            }
    }

    // if(isset($up)){
    //     header("Location:file.php?upload=1");
    // }else{
    //     if(move_uploaded_file($tmpname,$target)){
    //         header("Location:file.php?upload=0");
    //         mysqli_query($conn,$sql);
    //     }else{
    //         header("Location:file.php?upload=2");
    //     }
    // }

    // if($error==0){
    //     if(move_uploaded_file($tmpname,$target)){
    //         echo "上傳成功"; 
    //     }
    // }else{
    //     echo "上傳失敗";
    // }

?>