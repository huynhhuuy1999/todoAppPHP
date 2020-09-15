<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="./styles/styleUpdate.css" type="text/css">
<link rel="stylesheet" href="./styles/style.css" type="text/css">
<?php
    // display form update list to do
    include 'connect.php';
    include 'header.php';
    $a = $_SERVER['HTTP_HOST'];
    $b = $_SERVER['REQUEST_URI'];
    $c = $a.$b;
    $url_components = parse_url($c); 
    parse_str($url_components['query'], $params); 
    $id = $params['id'];
	$sql1="select id, description from todo where id='$id'";
    $kq=mysqli_query($conn,$sql1);
    echo "<div class='cover-form mt-4'>";
    echo "<form method='POST' action='./update-todo.php'>
            <div class='form-group'>";
                
    while($row1=mysqli_fetch_row($kq)){
        echo "<label for='id-update'>Todo</label>";
        echo "<input type='text' class='form-control' name='id_update' id='id-update' value='$row1[0]'>";
        echo "<label for='input-update'>Todo</label>";
        echo "<input type='text' class='form-control' name='todo_update' id='input-update' value='$row1[1]'>";
    }
    echo "</div>
    <input type='submit' class='btn btn-primary' value='Cập nhật'>
    </form>";
    echo "</div>";
?>