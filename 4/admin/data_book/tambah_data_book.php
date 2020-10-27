<?php
    include 'conn/koneksi_mysqli.php';
    date_default_timezone_set('Asia/Jakarta');

	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
?>

<!-- menu tengah -->
<div id="menu-tengah">
	<div id="bg_menu">Data Book
	</div>
	<div id="content_menu">
    <div id="menu_header">
    	<table width="100%" height="100%" style="background-color:#9cc;">
        	<tr>
            	<td align="center">Input Data</td>
            </tr>
        </table>
	</div>
	<div class="table_input">
    <form action="?page=proses_simpan_tambah_data_book" method="post">
        <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
        <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
	        <tbody>
                <tr>
                    <td width="20%" align="right">ID</td>
                    <td><input type="text" name="id" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Nama</td>
                    <td><input type="text" name="name" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Category ID</td>
                    <td>
                        <select name="category_id">
                            <?php
                                $query_category = "SELECT * FROM category_tb ORDER by category_id asc";
                                $sql_category    = mysqli_query($koneksi,$query_category);

                                while ($data_category=mysqli_fetch_array($sql_category)) {
                            ?>
                                <option value="<?php echo $data_category['category_id']; ?>"><?php echo "(".$data_category['category_id'].") ".$data_category['name_id']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="20%" align="right">Writer ID</td>
                    <td>
                        <select name="writer_id">
                            <?php
                                $query_writer = "SELECT * FROM writer_tb ORDER by writer_id asc";
                                $sql_writer    = mysqli_query($koneksi,$query_writer);

                                while ($data_writer=mysqli_fetch_array($sql_writer)) {
                            ?>
                                <option value="<?php echo $data_writer['writer_id']; ?>"><?php echo "(".$data_writer['writer_id'].") ".$data_writer['writer_name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="20%" align="right">Publication Year</td>
                    <td><input type="number" name="year" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Img</td>
                    <td><input type="text" name="img" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=data_book">Kembali</td>
                </tr>
            </tbody>
        </table>
        </form>
	      </div>
	  </div>
</div>