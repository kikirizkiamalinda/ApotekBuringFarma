<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$suplier = $_POST['suplier'];
$tgl = date("Y-m-d");
$nm_obat = $_POST['nama_obat'];
$jml_permintaan = $_POST['jumlah_permintaan'];
$ket = $_POST['keterangan'];
 
// menginput data ke database
if($_POST['kirim']){
	$update=mysqli_query($koneksi,"update permintaan_obat set status='sudah dikirim' where id='$id'");
	$terima=mysqli_query($koneksi,"select nama_obat,jumlah_permintaan from permintaan_obat where id='$id'");
	while($d = mysqli_fetch_array($terima)){
		$nama_obat=$d['nama_obat'];
		$jumlah_permintaan=$d['jumlah_permintaan'];
		$kirim=mysqli_query($koneksi,"insert into penerimaan_obat(tanggal, nama_obat, jumlah_obat, suplier, status) values('$tgl','$nama_obat','$jumlah_permintaan','$suplier','0')");
		// mengalihkan halaman kembali ke index.php
		if($update && $kirim){
			header("location:../view/trans_permintaan_obat.php?pesan=kirim");
		}else{
			header("location:../view/trans_permintaan_obat.php?pesan=gagal");
		}
	}
}else if($_POST['tambah']){
	$tambah = mysqli_query($koneksi,"insert into permintaan_obat(tanggal, nama_obat, jumlah_permintaan, keterangan, status) values('$tgl', '$nm_obat', '$jml_permintaan', '$ket', 'belum dikirim')");
		if($tambah){
			header("location:../view/trans_permintaan_obat_apotek.php?pesan=kirim");
		}else{
			header("location:../view/trans_permintaan_obat_apotek.php?pesan=gagal");
		}
}else{

}
 
?>