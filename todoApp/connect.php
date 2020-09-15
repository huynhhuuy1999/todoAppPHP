<?php
	// connect server mysql
	$SERVER="localhost";
	$USERNAME="root";
	$PASSWORD="123456";
	$DBNAME="todoapp";
	$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD);
	if(!$conn){
		die("fail");
	}
	
	mysqli_select_db($conn, $DBNAME);
	
?>