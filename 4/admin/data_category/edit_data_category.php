<?php
    include 'conn/koneksi_mysqli.php';
    date_default_timezone_set('Asia/Jakarta');

	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;

    $id_get     = $_GET['id'];

    $query      = "SELECT * FROM category_tb WHERE category_id='$id_get'";
    $sql        = mysqli_query($koneksi,$query);
    $data       = mysqli_fetch_array($sql);

    $id       = $data['category_id'];
    $name     = $data['name_id'];

?>

<!-- menu tengah -->
<div id="menu-tengah">
	<div id="bg_menu">Data Teknisi
	</div>
	<div id="content_menu">
    <div id="menu_header">
    	<table width="100%" height="100%" style="background-color:#9cc;">
        	<tr>
            	<td align="center">Edit Service Motor</td>
            </tr>
        </table>
	</div>
	<div class="table_input">
    <form action="?page=proses_simpan_edit_data_category&id=<?php echo $id_get; ?>" method="post">
        <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
        <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
	        <tbody>
                <tr>
                    <td width="20%" align="right">ID</td>
                    <td><input type="text" name="id" value="<?php echo $id; ?>" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Namar</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=data_service">Kembali</td>
                </tr>
            </tbody>
        </table>
        </form>
	      </div>
	  </div>
</div>