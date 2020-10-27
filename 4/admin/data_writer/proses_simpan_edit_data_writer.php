<?php
	include 'conn/koneksi_mysqli.php';

	$id_get 	= $_GET['id'];

	$id		= $_POST['id'];
	$name	= $_POST['name'];

	$input = mysqli_query($koneksi,"UPDATE  writer_tb SET
		writer_id='$id',
		writer_name='$name'
		WHERE writer_id = '$id_get'
	");
	 
	if ($input) {
		echo "<script> alert('Edit data BERHASIL.') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_writer'>";	
	}
	else {
		echo "<script> alert('Edit data GAGAL!') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_data_writer&id=$id_get'>";	
	}

?>