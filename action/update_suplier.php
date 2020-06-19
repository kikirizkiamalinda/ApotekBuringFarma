<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telp_hp = $_POST['telp_hp'];
 
// menginput data ke database
$update=mysqli_query($koneksi,"update suplier set nama_suplier='$nama_suplier',alamat='$alamat',telp_hp='$telp_hp' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
if($update){
	header("location:../view/master_suplier.php?pesan=update");
}else{
	header("location:../view/master_suplier.php?pesan=gagal");
}
 
?>