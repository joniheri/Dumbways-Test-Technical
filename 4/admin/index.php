<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TES BOOTCAMP</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    	<img src="images/header2.jpg"/>
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <span>JON</span>
        </div>
        <div id="menu_tanggal" align="right">
        <span>
        	<?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('d');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama</div>
    	<div id="left_menu">
        	<a href="index.php" class="menu">&raquo; Home </a> <br />
        	<a href="?page=data_category" class="menu">&raquo; Category </a> <br />
        	<a href="?page=data_writer" class="menu">&raquo; Writer </a> <br />
        	<a href="?page=data_book" class="menu">&raquo; Book </a> <br />
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "home.php";
						break;			
			
						//data category
						case "data_category";
						include "data_category/data_category.php";
						break;
						case "proses_hapus_data_category";
						include "data_category/proses_hapus_data_category.php";
						break;
						case "tambah_data_category";
						include "data_category/tambah_data_category.php";
						break;
						case "proses_simpan_tambah_data_category";
						include "data_category/proses_simpan_tambah_data_category.php";
						break;
						case "edit_data_category";
						include "data_category/edit_data_category.php";
						break;
						case "proses_simpan_edit_data_category";
						include "data_category/proses_simpan_edit_data_category.php";
						break;

						//data writer dan book, caranya sama dengan category
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
  	<!-- menu Footer -->
    <div id="footer"><center>
      Sistem Informasi &copy; 2020
    </center></div>
    
</div>

</body>
</html>