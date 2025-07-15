<?php
	include 'koneksi.php';

	$title = $_POST['title'];
	$description = $_POST['description'];

	if(isset($_POST['save_post'])){
		mysqli_query($koneksi,"INSERT INTO tb_todo VALUES('', $title','$description')");
		echo "Data has been saved";
	}
?>