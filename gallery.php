<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `gallery`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            width: 200px;
            height: auto;
        }
        .container {
            display: flex;
        }
        .box {
            width: 200px;
            height: 200px;
            overflow: hidden;
            background: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
    <table>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row["name"]}</td>";
            echo "<td><a href='gallery-delete.php?id={$row["id"]}&name={$row["name"]}'>刪除</td>";
            echo "</tr>";
        }
    ?>
    </table>
    </div>
</body>
</html>