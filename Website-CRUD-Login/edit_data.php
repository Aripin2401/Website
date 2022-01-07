<?php 
 
session_start();
 
if (!$_SESSION["login"] == TRUE) {
	header("location: index.php");
	exit;
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	
	<div class="container">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Logo</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="halaman_admin.php">Halaman Depan</a></li>
				<li class="active"><a href="tambah.php">Tambah Data</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	<h3>Tambah Data Siswa</h3>
	<table cellpadding="3" cellspacing="0">
		
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
		<div class="form-group">

			<div class="form-group">
			<div class="control-label col-sm-2">NIS Siswa</div>
			<div class="col-sm-17"><input class="form-control" type="hiden" name="id_siswa" disabled required value="<?php echo $data['id_siswa']; ?>"></div>
			</div>

			<div class="form-group">
			<div class="control-label col-sm-2">NIS Siswa</div>
			<div class="col-sm-17"><input class="form-control" type="text" name="nik_siswa" required value="<?php echo $data['nik_siswa']; ?>"></div>
			</div>

			<div class="form-group">
			<div class="control-label col-sm-2">Nama Siswa</div>
			<div class="col-sm-17"><input class="form-control" type="text" name="nama_siswa" required value="<?php echo $data['nama_siswa']; ?>"></div>
			</div>
		
			<div class="form-group">
			<div class="control-label col-sm-2">Kelas Siswa</div>
			<div class="col-sm-17">
				<select name="kelas_siswa" required class="form-control">
				<option><?php echo $data['kelas_siswa']; ?></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>
			</div>
			</div>
		
			<div class="form-group">
			<div class="control-label col-sm-2">Jurusan</div>
			<div class="col-sm-17">
				<select name="jurusan_siswa" required class="form-control">
				<option><?php echo $data['jurusan_siswa']; ?></option>
				<option>RPL</option>
				<option>TKJ</option>
				<option>Mulimedia</option>
				<option>TKR</option>
				<option>Farmasi</option>
				<option>Perawat</option>
			</select>
			</div>
			</div>

			<div class="form-group">
			<div class="control-label col-sm-2">Alamat Siswa</div>
			<div class="col-sm-17">
				<textarea class="form-control" name="alamat_siswa" required="" values=""><?php echo $data['alamat_siswa']; ?></textarea>
			</div>
			</div>

			<div class="form-group">
			<div class="control-label col-sm-2">Nomor Telepon</div>
			<div class="col-sm-17"><input class="form-control" type="number" name="nomor_hp_siswa" value="<?php echo $data['nomor_hp_siswa']; ?>"></div>
			</div>

				<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input class="btn btn-success btn-md" type="submit" name="next" value="Simpan Data"></td>
			</tr>

			</table>			
		</form>
	</table>
</body>
</html>
