<?php
	$connection = mysqli_connect("localhost","root","","database_todo");
	if (mysqli_connect_errno()){
		echo "Failed to connect database : " . mysqli_connect_error();
	}
?>