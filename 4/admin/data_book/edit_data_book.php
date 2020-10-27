<?php
    include 'conn/koneksi_mysqli.php';
    date_default_timezone_set('Asia/Jakarta');

	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;

    $id_get     = $_GET['id'];

    $query      = "SELECT * FROM book_tb WHERE id='$id_get'";
    $sql        = mysqli_query($koneksi,$query);
    $data       = mysqli_fetch_array($sql);

    $id            = $data['category_id'];
    $name          = $data['name'];
    $category_id   = $data['category_id'];
    $writer_id     = $data['writer_id'];
    $year          = $data['publication_year'];
    $img           = $data['img'];

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
    <form action="?page=proses_simpan_edit_data_book&id=<?php echo $id_get; ?>" method="post">
        <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
        <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
	        <tbody>
                <tr>
                    <td width="20%" align="right">ID</td>
                    <td><input type="text" name="id" value="<?php echo $id; ?>" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Nama</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>" size="50%" required="required"></td>
                </tr>

                <tr>
                    <td width="20%" align="right">Category ID</td>
                    <td>
                        <select name="category_id">
                            <option value="<?php echo $category_id; ?>"><?php echo "(".$category_id.") " ?></option>
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
                            <option value="<?php echo $writer_id; ?>"><?php echo "(".$writer_id.") " ?></option>
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
                    <td><input type="number" name="year" value="<?php echo $year; ?>" size="50%" required="required"></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Img</td>
                    <td><input type="text" name="img" value="<?php echo $img; ?>" size="50%" required="required"></td>
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