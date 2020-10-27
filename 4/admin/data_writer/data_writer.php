<?php
  include 'conn/koneksi_mysqli.php';

  $cari_post      = $_POST['cari'];
?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Writer
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=data_service" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            <tr>
              <td width="45%"><a href="?page=tambah_data_writer">Tambah Data</a></td>
              <td width="60%" align="right"><input type="text" name="cari" size="30" placeholder="Cari disini"></td>
              <td><input type="submit" id="submit" value="cari"></td>
            </tr>
          </table>
          </form>
            
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th style="width: 220px; text-align:center; vertical-align: middle;">ID</th>
                <th style="width: 200px; text-align:center; vertical-align: middle;">Name</th>
                <th style="text-align:center; vertical-align: middle;" colspan="2">Aksi</th>
              </tr>
            </thead>
            <?php
      				$query = "SELECT * FROM writer_tb 
              WHERE writer_id LIKE '%$cari_post%'
              OR writer_name LIKE '%$cari_post%'
              ORDER by writer_name DESC";
      				$sql    = mysqli_query($koneksi,$query);
      				$total  = mysqli_num_rows($sql);
      				$no = 1;
      				
      				while ($data=mysqli_fetch_array($sql)) {
      			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $data['writer_id']; ?></td>
                <td align="center"><?php echo $data['writer_name']; ?></td>
                <td style="width: 30px; text-align:center; vertical-align: middle;"><a href="?page=edit_data_writer&id=<?php echo $data['writer_id']; ?>" tittle="Edit"><img src="images/edit.png"/ width="15px" height="15px"></a></td>
                <td style="width: 30px; text-align:center; vertical-align: middle;"><a href="?page=proses_hapus_data_writer&id=<?php echo $data['writer_id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini..?')"><img src="images/delete.png"/ width="15px" height="15px"></a></td>
              </tr>
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah data : <?php echo $total; ?> </td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>