<?php
	if (isset($_POST['next'])) {
		include 'koneksi/koneksi.php';
		$id_siswa = $_POST['id_siswa'];
		$nik_siswa = $_POST['nik_siswa'];
		$nama_siswa = $_POST['nama_siswa'];
		$kelas_siswa = $_POST['kelas_siswa'];
		$jurusan_siswa = $_POST['jurusan_siswa'];
		$alamat_siswa = $_POST['alamat_siswa'];
		$nomor_hp_siswa = $_POST['nomor_hp_siswa'];

		$upgrade = mysql_query("UPDATE siswa SET nik_siswa='$nik_siswa', nama_siswa='$nama_siswa', kelas_siswa='$kelas_siswa', jurusan_siswa='$jurusan_siswa', alamat_siswa='$alamat_siswa', nomor_hp_siswa='$nomor_hp_siswa' WHERE id_siswa='$id_siswa'");
		if ($upgrade) {
			echo "<script>alert('Data Berhasil Diubah');</script>";
			echo "<script>history.back()</script>";
		} else {
			echo "Data ada yang salah";
			echo "<script>window.history.back()</script>";
		}
	}
?>