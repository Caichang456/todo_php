<?php
	include_once("config.php");
	$id_todo = $_GET['id_todo'];
	$result = mysqli_query($mysqli, "DELETE FROM tb_todo WHERE id_todo='$id_todo'");
?>