<?php
    include 'connect.php';
    // add new todo
    $description = $_POST['value'];
    $sql="insert into todo(description) values('$description')";
	mysqli_query($conn,$sql);
    mysqli_close($conn);
?>