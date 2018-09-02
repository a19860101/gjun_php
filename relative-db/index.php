<?php
    require_once("../connDB.php");
    $sql = "SELECT posts.title,posts.postDate,members.name 
    FROM `posts` LEFT JOIN `members` ON members.id = posts.member_id";
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
        table,td,th {border-collapse:collapse;border:1px solid #888;padding:10px}
    </style>
</head>
<body>
    <table>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row["title"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["postDate"]?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>