<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi/conn.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['jabatan']=="Administrator"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "Administrator";
		$_SESSION['nama_lengkap'] = $data['nama_depan'].' '.$data['nama_belakang'];
		// alihkan ke halaman dashboard admin
		header("location:..");
 
	// cek jika user login sebagai pegawai
	}else if($data['jabatan']=="Operator Apotek"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "Operator Apotek";
		$_SESSION['nama_lengkap'] = $data['nama_depan'].' '.$data['nama_belakang'];
		header("location:..");
 
	// cek jika user login sebagai pengurus
	}else if($data['jabatan']=="Operator Gudang"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "Operator Gudang";
		$_SESSION['nama_lengkap'] = $data['nama_depan'].' '.$data['nama_belakang'];
		// alihkan ke halaman dashboard pengurus
		header("location:..");
 
	}else if($data['jabatan']=="Pemilik"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "Pemilik";
		$_SESSION['nama_lengkap'] = $data['nama_depan'].' '.$data['nama_belakang'];
		// alihkan ke halaman dashboard pengurus
		header("location:..");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>