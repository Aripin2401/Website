<?php
if (isset($_GET['siswa_id'])) {
	include 'koneksi/koneksi.php';

	$siswa_id = $_GET['siswa_id'];

	$del = mysql_query("SELECT id_siswa FROM siswa WHERE id_siswa='$siswa_id'") or die(mysql_error());
	if (mysql_num_rows($del)==0) {
		echo "<script>window.history.back()</script>";
	} else {
		$hapus = mysql_query("DELETE FROM siswa WHERE id_siswa='$siswa_id'");
		if ($hapus) {
			echo "Data Berhasil Terhapus";
			echo "<a href=tambah.php> Kembali </a>";
		} else {
			echo "Data Gagal Terhapus";
			echo "<a href=tambah.php> Kembali </a>";
		}
	}
}
?>