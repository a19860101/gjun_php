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
        <input type="text" name="title" id="title">
        <textarea name="content" cols="30" rows="10" id="content"></textarea>
        <input type="submit" value="新增文章">
    </form>
    <script>
        $(document).ready(function(){
            $("form").submit(function(){
                $.ajax({
                    url: "new-ok.php",
                    type: "post",
                    data: {
                        title: $("#title").val(),
                        content: $("#content").val()
                    },
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