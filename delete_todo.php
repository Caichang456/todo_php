<?php
	include 'koneksi.php';
	$id_todo = $_GET['id_todo'];
	mysqli_query($mysqli, "DELETE FROM tb_todo WHERE id_todo='$id_todo'");
?>