<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
<table>
	<h2>Halaman Depan Login</h2>
	<form action="next_login.php" method="post"> <!-- kode yang akan mengeksekusi username dan password setelah di masukkan -->
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Password"></td>
		</tr>
			<td><input type="submit" name="masuk" value="Masuk"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
	</form>
</table>
</body>
</html>