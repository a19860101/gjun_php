<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        // echo $row;
        $data[] = $row;
    }
    echo json_encode($data);
?>