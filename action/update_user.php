<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$jabatan = $_POST['jabatan'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp_hp = $_POST['telp_hp'];
 
// menginput data ke database
$update=mysqli_query($koneksi,"update user set nama_depan='$nama_depan',nama_belakang='$nama_belakang',jabatan='$jabatan',telp_hp='$telp_hp',password='$password' where username='$username'");
 
// mengalihkan halaman kembali ke index.php
if($update){
	header("location:../view/master_user.php?pesan=update");
}else{
	header("location:../view/master_user.php?pesan=gagal");
}
 
?>