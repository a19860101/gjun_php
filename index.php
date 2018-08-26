<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `posts`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    <a href="new.php">新增文章</a>
    <div class="container">
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <div class="box">
                <h2><?php echo $row["title"];?></h2>
                <p><?php echo $row["content"];?></p>
                <div><?php echo $row["date"];?></div>
                <a href="javascript:;" id="<?php echo $row["id"]; ?>" class="del">刪除</a>
            </div>
        <?php } ?>
    </div>
    <script>
        $(document).ready(function(){
            $(".del").click(function(){
                let el = $(this);
                let id = el.attr("id");
                let data = "id="+id;
                if(confirm("確認刪除？")){
                    $.ajax({
                        url:"del.php",
                        type:"get",
                        data:data,
                        beforeSend:function(){
                            el.parents(".box").fadeOut(600);
                        },
                        success:function(){},
                        error:function(){}
                    })
                }

            });
        });
    </script>
</body>
</html>