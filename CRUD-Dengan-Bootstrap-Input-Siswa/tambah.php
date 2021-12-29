<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data Siswa</title>
</head>
<body>
	<h2>Halaman Tambah Data Siswa</h2>
	<table width="534">
		<tr>
			<td><a href="index.php">Data Siswa</a></td>
			<td><a href="tambah.php">Tambah Data siswa</a></td>
		</tr>
	</table>
	<h3>Tambah Data Siswa</h3>
	<table cellpadding="3" cellspacing="0">
		<!--dipilih dalam tabel untuk menampilkan data yang akan dimasukkan-->
		<form action="tambah_data.php" method="post"> <!--tambah_data.php adalah form yang akan melanjutkan eksekusi setelah data berubah untuk di simpan di database-->
		<tr>
			<td>ID Siswa</td>
			<td>:</td>
			<td><input type="text" name="id_siswa" required></td>
		</tr>
		<tr>
			<td>NIS Siswa</td>
			<td>:</td>
			<td><input type="text" name="nis_siswa" required></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td>:</td>
			<td><input type="text" name="nama_siswa" required></td>
		</tr>
		<tr>
			<td>Kelas Siswa</td>
			<td>:</td>
			<td><select name="kelas_siswa" required>
				<option>.::Masukkan Kelas::.</option> 
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select name="jurusan_siswa" required>
				<option>.::Masukkan Jurusan::.</option>
				<option>RPL</option>
				<option>TKJ</option>
				<option>Mulimedia</option>
				<option>TKR</option>
				<option>Farmasi</option>
				<option>Perawat</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Alamat Siswa</td>
			<td>:</td>
			<td><textarea name="alamat_siswa" required=""></textarea></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td>:</td>
			<td><input type="number" name="nomor_hp_siswa"></td>
		</tr>
		<tr>
			<td><input type="submit" name="masuk" value="Masukkan Data"></td>
			<td><input type="reset" name="teset" value="Ulangi Data"></td>
		</tr>
		</form>
	</table>
</body>
</html>