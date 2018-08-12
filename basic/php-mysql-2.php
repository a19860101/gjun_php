<?php
    require_once("connDB.php");
    
    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);

    #$row = mysqli_fetch_assoc($result);
    #echo $row["id"].$row["name"].$row["phone"].$row["mail"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td {
            border:1px solid #666;
            border-collapse:collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
<a href="php-new.php">新增資料</a>
   <table>
        <?php 
            while($row=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["mail"];?></td>
                <td><a href="php-delete.php?id=<?php echo $row["id"];?>" 
                onclick="return confirm('確認刪除？')">刪除</a></td>
                <td><a href="php-detail.php?id=<?php echo $row["id"];?>">修改</a></td>
            </tr>
        <?php
            }
        ?>
   </table>
</body>
</html>