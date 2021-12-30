<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
	<h2>Halaman Edit Data</h2>
	<table width="534">
		<tr>
			<td><a href="index.php">Data Siswa</a></td>
			<td><a href="tambah.php">Tambah Data siswa</a></td>
		</tr>
	</table>
	<h2>Halaman Edit Data</h2>
	<table>
		
		<?php

		include 'koneksi/koneksi.php';
		$id_siswa = $_GET['id_siswa'];
		$ambil = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id_siswa'"); //mengambil data yang tersimpan di database

		if (mysql_num_rows($ambil)==0) {
			echo "Data kosong belum berubah";
		} else {
			$data = mysql_fetch_assoc($ambil);//menampilkan setiap data yang akan berubah, tidak perlu siswa_id karena id primary-key tidak bisa diubah
		}
		?>
		<form action="edit_proses.php" method="post"> <!-- setelah data berubah maka kan menuju proses menyimpan data yang di ubah -->
			<input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
			<table cellpadding="3" cellspacing="0">
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nik_siswa" value="<?php echo $data['nik_siswa']; ?>" required></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>" required></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><input type="text" name="kelas_siswa" value="<?php echo $data['kelas_siswa']; ?>" required></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan_siswa" value="<?php echo $data['jurusan_siswa']; ?>" required></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat_siswa" value="<?php echo $data['alamat_siswa']; ?>" required></td>
				</tr>
				<tr>
					<td>No. Ponsel</td>
					<td>:</td>
					<td><input type="text" name="nomor_hp_siswa" value="<?php echo $data['nomor_hp_siswa']; ?>" required></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="next" value="Simpan Data"></td>
			</tr>

			</table>			
		</form>
	</table>
</body>
</html>