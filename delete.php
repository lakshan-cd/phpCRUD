<?php
    include "db.conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `crud` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header ("Location: index.php?msg=Record Deleted Successfully");
    }else{
        echo "Failes to delete " . mysqli_error($conn);
    }
?>