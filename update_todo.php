<?php
	include 'koneksi.php';

	$id_todo = $_POST['id_todo'];
	$title = $_POST['title'];
	$description = $_POST['description'];

	mysqli_query($mysqli, "UPDATE tb_todo SET title='$title', description='$description' WHERE id_todo='$id_todo'");
?>