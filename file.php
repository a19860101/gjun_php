<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- <input type="text" name="name"> -->
        <input type="file" name="pic">
        <input type="submit" value="上傳">
    </form>
    <div class="upload-msg">
        <?php
            if(isset($_GET["upload"])){
                switch($_GET["upload"]){
                    case 0:
                        echo "上傳完成";
                        break;
                    case 1:
                        echo "格式錯誤";
                        break;
                    case 2:
                        echo "檔案過大，須小於3M";
                        break;
                    case 3:
                        echo "請選擇檔案";
                        break;
                    case 4:
                        echo "檔案已存在";
                        break;
                    case 5:
                        echo "上傳錯誤";
                        break;
                }
            }
        ?>
    </div>
</body>
</html>