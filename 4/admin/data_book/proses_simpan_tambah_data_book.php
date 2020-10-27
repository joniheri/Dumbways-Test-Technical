<?php
	include 'conn/koneksi_mysqli.php';

	$id 				= $_POST['id'];
	$name				= $_POST['name'];
	$category_id 		= $_POST['category_id'];
	$writer_id			= $_POST['writer_id'];
	$publication_year	= $_POST['year'];
	$img				= $_POST['img'];
	
	$input = mysqli_query($koneksi,"INSERT into book_tb values(
		'$id',
		'$name',
		'$category_id',
		'$writer_id',
		'$publication_year',
		'$img'
	)");
	 
	if ($input) {
		echo "<script> alert('Tambah data BERHASIL.') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_book'>";	
	}
	else {
		echo "<script> alert('Data Gagal Di Input') </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=tambah_data_book'>";	
	}

?>