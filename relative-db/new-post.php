<?php
    require_once("../connDB.php");
    $sql_cate = "SELECT * FROM `categories`";
    $result_cate = mysqli_query($conn,$sql_cate);

    $sql_m = "SELECT * FROM `members`";
    $result_m = mysqli_query($conn,$sql_m);
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
    <form action="new-post-ok.php" method="post">
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <select name="category_id" id="">
        <?php while($row_cate = mysqli_fetch_assoc($result_cate)){ ?>
            <option value="<?php echo $row_cate["id"];?>">
                <?php echo $row_cate["name"];?>
            </option>
        <?php } ?>
        </select>
        <select name="member_id" id="">
            <?php while($row_m = mysqli_fetch_assoc($result_m)){ ?>
                <option value="<?php echo $row_m["id"];?>">
                    <?php echo $row_m["name"];?>
                </option>
            <?php } ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>