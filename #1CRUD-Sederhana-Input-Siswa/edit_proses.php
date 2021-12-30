<?php
	if (isset($_POST['next'])) {
		include 'koneksi/koneksi.php'; 
		$id_siswa = $_POST['id_siswa'];//mengambil data id_siswa dari edit_data.php (tidak perlu diubah)
		$nik_siswa = $_POST['nik_siswa'];//mengambil data nik_siswa dari edit_data.php
		$nama_siswa = $_POST['nama_siswa'];//mengambil data nama_siswa dari edit_data.php
		$kelas_siswa = $_POST['kelas_siswa'];//mengambil data kelas_siswa dari edit_data.php
		$jurusan_siswa = $_POST['jurusan_siswa'];//mengambil data jurusan_siswa dari edit_data.php
		$alamat_siswa = $_POST['alamat_siswa'];//mengambil data alamat_siswa dari edit_data.php
		$nomor_hp_siswa = $_POST['nomor_hp_siswa'];//mengambil data nomor_hp_siswa dari edit_data.php

		$upgrade = mysql_query("UPDATE siswa SET nik_siswa='$nik_siswa', nama_siswa='$nama_siswa', kelas_siswa='$kelas_siswa', jurusan_siswa='$jurusan_siswa', alamat_siswa='$alamat_siswa', nomor_hp_siswa='$nomor_hp_siswa' WHERE id_siswa='$id_siswa'");//data yang akan di simpan setelah di ubah
		if ($upgrade) {
			echo "<script>alert('Data Berhasil Diubah');</script>";
			echo "<script>history.back()</script>";
		} else {
			echo "Data ada yang salah";
			echo "<script>window.history.back()</script>";
		}
	}
?>