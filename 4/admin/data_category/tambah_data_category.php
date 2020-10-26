<?php
    include 'conn/koneksi_mysqli.php';
    date_default_timezone_set('Asia/Jakarta');

	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
?>

<!-- menu tengah -->
<div id="menu-tengah">
	<div id="bg_menu">Data Teknisi
	</div>
	<div id="content_menu">
    <div id="menu_header">
    	<table width="100%" height="100%" style="background-color:#9cc;">
        	<tr>
            	<td align="center">Input Dat</td>
            </tr>
        </table>
	</div>
	<div class="table_input">
    <form action="?page=proses_simpan_tambah_data_category" method="post">
        <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
        <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
	        <tbody>
                <tr>
                    <td width="20%" align="right">ID</td>
                    <td><input type="text" name="id" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Namar</td>
                    <td><input type="text" name="name" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=data_category">Kembali</td>
                </tr>
            </tbody>
        </table>
        </form>
	      </div>
	  </div>
</div>