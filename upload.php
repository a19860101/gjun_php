<?php
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

    if($pic_name_ext!="jpg" && $pic_name_ext!="png" && $pic_name_ext!="gif"){
        echo "error";
        $up = 1;
    }
    if($pic_size > $max_size) {
        echo "檔案過大，須小於3MB";
        $up = 1;
    }
    if($error==4){
        echo "empty";
        $up = 1;
    }

    if(isset($up)){
        echo "上傳失敗";
    }else{
        // echo "上傳成功";
        if(move_uploaded_file($tmpname,$target)){
            echo "上傳成功"; 
        }else{
            echo  "上傳錯誤";
        }
    }

    // if($error==0){
    //     if(move_uploaded_file($tmpname,$target)){
    //         echo "上傳成功"; 
    //     }
    // }else{
    //     echo "上傳失敗";
    // }

?>