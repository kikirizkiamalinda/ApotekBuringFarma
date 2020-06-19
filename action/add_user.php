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
$tambah=mysqli_query($koneksi,"insert into user values('$username','$nama_depan','$nama_belakang','$jabatan','$telp_hp','$password')");
 
// mengalihkan halaman kembali ke index.php
if($tambah){
	header("location:../view/master_user.php?pesan=input");
}else{
	header("location:../view/master_user.php?pesan=gagal");
}
 
?>