<?php
	include 'conn/koneksi_mysqli.php';

	$id_get 	= $_GET['id'];

	$id 				= $_POST['id'];
	$name				= $_POST['name'];
	$category_id 		= $_POST['category_id'];
	$writer_id			= $_POST['writer_id'];
	$publication_year	= $_POST['year'];
	$img				= $_POST['img'];

	$input = mysqli_query($koneksi,"UPDATE book_tb SET
		id='$id',
		name='$name',
		category_id='$category_id',
		writer_id='$writer_id',
		publication_year='$publication_year',
		img='$img'
		WHERE id = '$id_get'
	");
	 
	if ($input) {
		echo "<script> alert('Edit data BERHASIL.') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_book'>";	
	}
	else {
		echo "<script> alert('Edit data GAGAL!') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_data_book&id=$id_get'>";	
	}

?>