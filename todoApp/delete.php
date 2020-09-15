<?php
    include 'connect.php';
    $id=$_POST['value'];
    $sql="delete from todo where id='$id'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>