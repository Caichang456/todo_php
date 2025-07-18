<?php
	includee 'connection.php';
	$id = $_GET['id'];
	mysqli_query($connection,"delete from table_todo where id='$id'");
?>