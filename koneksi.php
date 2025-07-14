<?php
	$koneksi = mysqli_connect("localhost","root","","db_todo");
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
?>