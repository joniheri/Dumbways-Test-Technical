<?php
	include 'conn/koneksi_mysqli.php';

	$id_get = $_GET['id'];
	$query = mysqli_query($koneksi,"DELETE FROM category_tb WHERE category_id='$id_get'");
	if ($query) {
		echo "<script>alert('Hapus data BERHASIL.')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_category'>";
	} else {
		echo "Hapus data GAGAL!";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_category'>";
	}
?>