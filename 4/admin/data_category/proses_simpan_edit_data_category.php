<?php
	include 'conn/koneksi_mysqli.php';

	$id_get 	= $_GET['id'];

	$id		= $_POST['id'];
	$name	= $_POST['name'];

	$input = mysqli_query($koneksi,"UPDATE  category_tb SET
		category_id='$id',
		name_id='$name'
		WHERE category_id = '$id_get'
	");
	 
	if ($input) {
		echo "<script> alert('Edit data BERHASIL.') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_category'>";	
	}
	else {
		echo "<script> alert('Edit data GAGAL!') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_data_category&id=$id_get'>";	
	}

?>