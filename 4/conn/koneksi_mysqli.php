<?php
	//koneksi MySQLi===========
	$koneksi = mysqli_connect("localhost", "root", "", "db_tes_bootcamp");

	if (mysqli_connect_errno()){
	echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
	}
	//end koneksi MySQLi===========
?>