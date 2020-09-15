<?php
    // update todo from form in file update.php
    include 'connect.php';
    $newDescription=$_POST['todo_update'];
    $id_update = $_POST['id_update'];
    $sql="update todo set description='$newDescription' where id='$id_update'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "Cập nhật thành công";
?>