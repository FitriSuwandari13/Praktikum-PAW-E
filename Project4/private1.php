<?php
	require 'adminPermission.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Data 1</title>
	<style>
		body {
			font-family: algerian;
		}
		select {
			width: 99%;
		}
		fieldset{
			width: 50%;
			background-color: blue;
		}
		table{
			background-color: cyan;
			margin-left: 30px;
			text-align: justify-all;
		}
		.menu a:link, a:visited {
		  background-color: #f44336;
		  color: white;
		  padding: 10px 30px;
		  margin-left: 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		}

		.menu a:hover, a:active {
		  background-color: red;
		}
	</style>
</head>
<body>
	<div class="menu">
		<a href='http://localhost/Project4/index.php'>Home</a>
		<a href='http://localhost/Project4/private2.php'>Detail Data 2</a>
		<a href='http://localhost/Project4/logout.php'>Logout</a>
	</div>
	<fieldset>
		<legend>Data Detil 1</legend>
			<table>
				<tr>
						<td>Nama Panggilan</td>
						<td>:</td>
						<td>Fitri</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>Perempuan</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>Dsn. Tarebungan Desa Kalianget Timur Kecamatan Kalianget Kabupaten Sumenep </td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><a href="mailto:fitrisuwandari1301@gmail.com">fitrisuwandari1301@gmail.com</a></td>
					</tr>
			</table>
	</fieldset>
</body>
</html>