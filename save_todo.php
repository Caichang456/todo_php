<?php
	include 'koneksi.php';

	$title = $_POST['title'];
	$description = $_POST['description'];

	mysqli_query($koneksi,"INSERT INTO tb_todo VALUES('', $title','$description')");
?>