<?php

	include 'koneksi/koneksi.php';

	$siswa_id = $_GET['siswa_id'];

	$del = mysqli_query($koneksi, "SELECT id_siswa FROM siswa WHERE id_siswa='$siswa_id'") or die(mysqli_error());
	if (mysqli_num_rows($del)==0) {
		echo "<script>window.history.back()</script>";
	} else {
		$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$siswa_id'");
		if ($hapus) {
			echo "Data Berhasil Terhapus";
			echo "<a href=tambah.php> Kembali </a>";
		} else {
			echo "Data Gagal Terhapus";
			echo "<a href=tambah.php> Kembali </a>";
		}

}
?>