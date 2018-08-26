<?php
    require_once("connDB.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `posts` WHERE id=".$id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <form action="javascript:;" method="post">
        <input type="text" name="title" id="title" value="<?php echo $row["title"];?>">
        <textarea name="content" cols="30" rows="10" id="content"><?php echo $row["content"];?></textarea>
        <input type="hidden" name="id" id="id" value="<?php echo $row["id"];?>">
        <input type="submit" value="編輯文章">
    </form>
    <script>
        $(document).ready(function(){
            $("form").submit(function(){
                let data = $("form").serialize();
                $.ajax({
                    url: "edit-ok.php",
                    type: "post",
                    // data: {
                    //     title: $("#title").val(),
                    //     content: $("#content").val(),
                    //     id: $("#id").val()
                    // },
                    data:data,
                    success: function(){
                        location.href= "index.php"
                    },
                    error: function(){
                        alert("error");
                    }
                });
            });
            
        });

        // $(function(){

        // })
    </script>
</body>
</html>