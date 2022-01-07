<!DOCTYPE html>
<html>
<head>
	<title>Halaman Depan</title>
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
				<li class="active"><a href="halaman_admin.php">Halaman Depan</a></li>
				<li><a href="tambah.php">Tambah Data</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	<h3>Data Siswa</h3>
	<table class="table"> <!--tabel yang menampilkan data siswa dari database-->
		<thead>
			<tr>
			<th>No.</th>
			<th>ID Siswa</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<?php
			include 'koneksi/koneksi.php'; //koneksi antara website php dan phpmyadmin

			$query = mysql_query("SELECT * FROM siswa ORDER BY id_siswa DESC") or die(mysql_error()); //mengambil data dari phpmyadmin untuk di tampilkan
			if (mysql_num_rows($query)==0) {
				echo "Data kosong belum terisi...!!!";
			} else {
				$no =1;
				while ($data = mysql_fetch_assoc($query)) {
					echo "<tr>";
					echo "<td>".$no."</td>";
					echo "<td>".$data['id_siswa']."</td>";//mengambil id_siswa dari phpmyadmin
					echo "<td>".$data['nik_siswa']."</td>";//mengambil nis_siswa dari phpmyadmin
					echo "<td class=text-capitalize>".$data['nama_siswa']."</td>";//mengambil nama dari phpmyadmin
					echo "<td>".$data['kelas_siswa']."</td>";//mengambil kelas_siswa dari phpmyadmin
					echo "<td class=text-uppercase>".$data['jurusan_siswa']."</td>";//mengambil jurusan dari phpmyadmin
					echo "<td class=text-capitalize>".$data['alamat_siswa']."</td>";//mengambil alamat_siswa dari phpmyadmin
					echo "<td>".$data['nomor_hp_siswa']."</td>";//mengambil nomor_hp_siswa dari phpmyadmin
					echo '<td><a class="btn btn-info btn-md" href="edit_data.php?id_siswa='.$data['id_siswa'].'">Edit</a> | <a class="btn btn-danger btn-md" href="hapus.php?siswa_id='.$data['id_siswa'].'" onclick="return confirm(\'Anda Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;
				}
			}

		?>
	</table>
	</div>	
</body>
</html>
