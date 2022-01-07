<?php
if (isset($_POST['masuk'])) //keretangan mengambil data yang di input dari <input type="submit" name="masuk" value="Masukkan Data">
	include 'koneksi/koneksi.php'; //koneksi phpmyadmin ke php
$nis_siswa = $_POST['nis_siswa']; //variabel untuk mmenambahkan nis_siswa
$nama_siswa = $_POST['nama_siswa']; //variabel untuk menambahkan nama_siswa
$kelas_siswa = $_POST['kelas_siswa']; //variabel untuk menambahkan kelas_siswa
$jurusan_siswa = $_POST['jurusan_siswa']; //variabel untuk menambahkan alamat_siswa
$alamat_siswa = $_POST['alamat_siswa']; //variabel untuk menambahkan alamat_siswa
$nomor_hp_siswa = $_POST['nomor_hp_siswa']; //variabel untuk menambahkan nomor_hp_siswa

$insert = mysql_query("INSERT INTO siswa VALUES('$nis_siswa', '$nama_siswa', '$kelas_siswa', '$jurusan_siswa', '$alamat_siswa', '$nomor_hp_siswa')") or die(mysql_error()); //kode untuk memasukkan data ke phpmyadmin dari halaman tambah.php

if ($insert) {
	echo "Data bernama ".$nama_siswa." Berhasil Ditambahkan";
	echo "<a href=halaman_admin.php>Kembali</a>"; //keterangan data berhasil disimpan dalam database
}else {
	echo "Data Gagal Ditambahkan";
	echo "<a href=tambah.php>Kembali</a>"; //keterangan data gagal di simpan ke database
}
?>