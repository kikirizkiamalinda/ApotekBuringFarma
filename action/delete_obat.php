<?php 
// koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
 
// menginput data ke database
$delete=mysqli_query($koneksi,"delete from obat where id='$id'");
 
// mengalihkan halaman kembali ke index.php
if($delete){
	header("location:../view/master_obat.php?pesan=delete");
}else{
	header("location:../view/master_obat.php?pesan=gagal");
}
 
?>