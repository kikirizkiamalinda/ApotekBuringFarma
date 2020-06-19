<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
 
// menginput data ke database
$delete=mysqli_query($koneksi,"delete from user where username='$username'");
 
// mengalihkan halaman kembali ke index.php
if($delete){
	header("location:../view/master_user.php?pesan=delete");
}else{
	header("location:../view/master_user.php?pesan=gagal");
}
 
?>