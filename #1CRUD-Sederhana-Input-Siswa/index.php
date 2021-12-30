<!DOCTYPE html>
<html>
<head>
	<title>Halaman Depan</title>
</head>
<body>
	<h2>Halaman Depan</h2>
	<table width="534">
		<tr>
			<td><a href="index.php">Data Siswa</a></td>
			<td><a href="tambah.php">Tambah Data siswa</a></td>
		</tr>
	</table>

	<h3>Data Siswa</h3>
	<table cellpadding="5" cellspacing="0" border="1"> <!--tabel yang menampilkan data siswa dari database-->
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
					echo "<td>".$data['nama_siswa']."</td>";//mengambil nama dari phpmyadmin
					echo "<td>".$data['kelas_siswa']."</td>";//mengambil kelas_siswa dari phpmyadmin
					echo "<td>".$data['jurusan_siswa']."</td>";//mengambil jurusan dari phpmyadmin
					echo "<td>".$data['alamat_siswa']."</td>";//mengambil alamat_siswa dari phpmyadmin
					echo "<td>".$data['nomor_hp_siswa']."</td>";//mengambil nomor_hp_siswa dari phpmyadmin
					echo '<td><a href="edit_data.php?id_siswa='.$data['id_siswa'].'">Edit Data Siswa</a> / <a href="hapus.php?siswa_id='.$data['id_siswa'].'" onclick="return confirm(\'Anda Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;
				}
			}

		?>
	</table>
</body>
</html>