<?php
	include 'conn/koneksi_mysqli.php';

	$id 	= $_POST['id'];
	$name	= $_POST['name'];
	
	$input = mysqli_query($koneksi,"INSERT into category_tb values(
		'$id',
		'$name'
	)");
	 
	if ($input) {
		echo "<script> alert('Tambah data BERHASIL.') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_category'>";	
	}
	else {
		echo "<script> alert('Data Gagal Di Input') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=tambah_data_category'>";	
	}

?>