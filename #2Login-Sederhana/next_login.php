<?php 
include 'koneksi/koneksi.php';
 
$username = $_POST['username']; //mengambil username yang diisi dari index.php
$password = $_POST['password']; //mengambil password yang diisi dari index.php
 
$query = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'"); //mengeksekusi username dan password untuk di cocokkan
$cek = mysql_num_rows($query);
if ($cek >0) {
	$data = mysql_fetch_array($login);

		header("location:halaman_admin.php"); //jika username dan password benar makan akan dialihkan ke halaman halaman_admin.php
	} else {
		header("location:halaman_gagal.php");//jika username dan password salah makan akan dialihkan ke halaman halaman_gagal.php
	}

?>
