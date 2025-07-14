<?php
	include_once("config.php");

	$title = $_POST['title'];
	$description = $_POST['description'];

	mysqli_query($mysqli, "INSERT INTO tb_todo(title, description) VALUES ('$title','$description')");
?>