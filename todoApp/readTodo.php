
<?php
    include 'connect.php';
    // get list todo
	$sql1='select id, description from todo';
	$kq=mysqli_query($conn,$sql1);
    echo "<table id='verticalScroll' class='table table-sm table-bordered table-striped table-hover'>";
    echo "<thead>";
    echo "<tr><th>STT</th><th>To do</th><th>Update</th><th>Delete</th></tr>";
    echo "</thead>";
    echo "<tbody class='body-table'>";
    // display list to do with each row
	while($row1=mysqli_fetch_row($kq)){
        echo "<tr id='tr".$row1[0]."'>
            <td>$row1[0]</td>
            <td>$row1[1]</td>
            <td><a href='/todoApp/update.php?id=".$row1[0]."'>Update</a></td>
            <td><a id='del".$row1[0]."' class='delete'>Delete</a></td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
?>