<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION["USER"])){ ?>
        <form action="auth.php" method="post">
            <input type="text" name="user" placeholder="帳號">
            <input type="password" name="pw" placeholder="密碼">
            <input type="submit" value="登入">
        </form>
        <a href="signup.php">申請會員</a>
    <?php }else{ ?>
        <div><?php echo $_SESSION["USER"];?>你好</div>
        <a href="members.php">會員專區</a>
        <a href="logout.php?logout=true">登出</a>
    <?php }?>
    <div class="errcode">
        <?php
            if(isset($_GET["errcode"])){
                switch($_GET["errcode"]){
                    case 0:
                        echo "請輸入帳號密碼";
                        break;
                    case 1:
                        echo "帳號或密碼錯誤";
                        break;
                    case 2:
                        echo "請登入會員";
                        break;
                    case 3:
                        echo "拒絕存取";
                        break;
                }
            }
            // if(isset($_GET["errcode"])&&$_GET["errcode"]==0){
            //     echo "請輸入帳號密碼";
            // }
            // if(isset($_GET["errcode"])&&$_GET["errcode"]==1){
            //     echo "帳號或密碼錯誤";
            // }
        ?>
    </div>
</body>
</html>