<?php 
	include '../koneksi/conn.php';
	$id = $_POST['id'];
	$jumlah = $_POST['jml_obat_keluar'];
	$keterangan = $_POST['keterangan'];
	$pegawai = $_POST['pegawai'];
	$tgl = date("Y-m-d");
	if($_POST['kirim']){
		$obat=mysqli_query($koneksi, "select * from obat where id='$id'");
		while($data=mysqli_fetch_array($obat)){
			$stok = $data['stok']-$jumlah;
			$nama_obat = $data['nama_obat'];
			$update = mysqli_query($koneksi,"update obat set stok='$stok' where id='$id'");
			$tambah = mysqli_query($koneksi,"insert into obat_keluar(tanggal, nama_obat, jumlah, keterangan, pegawai) values('$tgl','$nama_obat','$jumlah','$keterangan','$pegawai')");
			if($update && $tambah){
				header("location:../view/trans_obat_keluar.php?pesan=input");
			}else{
				header("location:../view/trans_obat_keluar.php?pesan=gagal");
			}
		}
	}
	else{
		header("location:../view/master_obat.php?pesan=POKOK GAGAL");
	}	
?>