<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telp_hp = $_POST['telp_hp'];
 
// menginput data ke database
$tambah=mysqli_query($koneksi,"insert into suplier(nama_suplier,alamat,telp_hp) values('$nama_suplier','$alamat','$telp_hp')");
 
// mengalihkan halaman kembali ke index.php
if($tambah){
	header("location:../view/master_suplier.php?pesan=input");
}else{
	header("location:../view/master_suplier.php?pesan=gagal");
}
 
?>