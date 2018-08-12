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
    <?php
        echo "<table>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["mail"]."</td>";
            echo "<td><a href='php-detail.php?id=".$row["id"]."'>修改</a></td>";
            echo "</tr>";  
        }   
        echo "</table>";
    ?>
</body>
</html>