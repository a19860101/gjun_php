<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="reply.php" method="post">
        <input type="text" name="user">
        <input type="text" name="mail">
        <select name="edu">
            <option value="國小">國小</option>
            <option value="國中">國中</option>
            <option value="高中職">高中職</option>
            <option value="大專院校">大專院校</option>
        </select>
        <input type="checkbox" name="hobby[]" value="吃">吃
        <input type="checkbox" name="hobby[]" value="喝">喝
        <input type="checkbox" name="hobby[]" value="玩">玩
        <input type="checkbox" name="hobby[]" value="樂">樂

        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="送出">
    </form>
</body>
</html>