<?php 
	include '../koneksi/conn.php';
	$nama_obat = $_POST['nama_obat'];
	$jenis_obat = $_POST['jenis_obat'];
	$satuan = $_POST['satuan'];
	$tanggal_terima = $_POST['tanggal_terima'];
	$tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
	$stok = $_POST['stok'];
	$suplier = $_POST['suplier'];
	$no_faktur = $_POST['no_faktur'];
	$tanda_terima = $_POST['tanda_terima'];
	if($_POST['tambah']){
		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$nama = $_FILES['tanda_terima']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['tanda_terima']['size'];
		$file_tmp = $_FILES['tanda_terima']['tmp_name'];
		$dirUpload = "../assets/img/obat/";
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 2044070){			
				move_uploaded_file($file_tmp, $dirUpload.$nama);
				$tambah = mysqli_query($koneksi,"insert into obat(nama_obat, jenis_obat, satuan, tanggal_terima, tanggal_kadaluarsa, stok, suplier, no_faktur, tanda_terima) values('$nama_obat','$jenis_obat','$satuan','$tanggal_terima','$tanggal_kadaluarsa','$stok','$suplier','$no_faktur','$nama' )");
				if($tambah){
					header("location:../view/master_obat.php?pesan=input");
				}else{
					header("location:../view/master_obat.php?pesan=gagal");
				}
			}else{
				header("location:../view/master_obat.php?pesan=gagalukuran");
			}
		}else{
			header("location:../view/master_obat.php?pesan=gagaleks");
	    }
	}else{
		header("location:../view/master_obat.php?pesan=POKOK GAGAL");
	}	
?>