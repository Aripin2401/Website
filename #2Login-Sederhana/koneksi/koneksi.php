<?php
$server = "localhost"; //nama server xampp
$username = "root"; //nama username phpmyadmin bawaan xampp
$password = ""; //password phpmyadmin bawaan xampp memang kosong
$database = "belajar-crud"; //nama database
 
mysql_connect($server, $username, $password) or die("Koneksi ke database gagal!"); //koneksi phpmyadmin ke php
mysql_select_db($database) or die("Tidak ada database yang dipilih!"); //koneksi database ke website php
?>