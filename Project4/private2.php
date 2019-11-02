<?php
	require 'adminPermission.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Data 2</title>
	<style>
		body {
			font-family: algerian;
		}
		select {
			width: 99%;
		}
		table{
			background-color: red;
			margin-left: 30px;
			text-align: justify-all;
			border: 3px solid red;
		}
		td, th{
			background-color: cyan;
			text-align: center;
		}
		.menu a:link, a:visited {
		  background-color: #f44336;
		  color: white;
		  padding: 10px 30px;
		  margin-left: 30px;
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
		<a href='http://localhost/Project4/private1.php'>Detail Data 1</a>
		<a href='http://localhost/Project4/logout.php'>Logout</a>
	</div>
	<table >
	<tr> 
		<th colspan="3"> Riwayat Pendidikan</th>
	</tr>
	<tr>
		<th>Sekolah</th>
		<th>Tahun Masuk - Lulus</th>
		<th>Website</th>
	</tr>
	<tr>
		<td>SDN Kalianget Timur X</td>
		<td>2005-2011</td>
		<td><a href="http://sdnkaliangettimurx.blogspot.com/">SDN Kalianget Timur X</a></td>
		<td></td>
	</tr>
	<tr>
		<td>SMPN 2 Kalianget</td>
		<td>2011-2014</td>
		<td><a href="https://smpn2kalianget.wordpress.com/">SMPN 2 Kalianget</a></td>
	</tr>
	<tr>
		<td>SMAN 1 Kalianget</td>
		<td>2014-2017</td>
		<td><a href="https://sites.google.com/site/smanikakertasada/">SMAN 1 Kalianget</a></td>
	</tr>
	<tr>
		<td>Universitas Trunojoyo Madura</td>
		<td>2017-Sekarang</td>
		<td><a href="https://www.trunojoyo.ac.id">www.trunojoyo.ac.id</a></td>
	</tr>

	<tr> 
		<th colspan="3"> Mata Kuliah yang diambil</th>
	</tr>
	<tr>
		<th>Nama Matakuliah</th>
		<th colspan="2">Semester</th>
	</tr>
	<tr>
		<td> 
		Algoritma Pemrograman<br>
		Pendidikan Agama Islam<br>
		Bahasa Inggris<br>
		Matematika<br>
		Logika Informatika<br>
		Pengantar Informatika<br>
		Bahasa Indonesia
		</td>
		<td colspan="2">Semester 1</td>
	</tr>
	<tr>
		<td> 
		Struktur Data<br>
		Dasar Pemrograman Web<br>
		Organisasi Komputer<br>
		Fisika Informatika<br>
		Komputasi Aljabar Linier<br>
		Pancasila dan Kewarganegaraan<br>
		Statistika
		</td>
		<td colspan="2">Semester 2</td>
	</tr>
	<tr>
		<td>
		Matematika Diskrit<br>
		Sistem Operasi<br>
		Pemrograman Desktop<br>
		Rekayasa Multimedia<br>
		Sistem Basis Data<br>
		Pemrograman Berorientasi Objek<br>
		</td>
		<td colspan="2">Semester 3</td>
	</tr>
	<tr>
		<td> 
		Bahasa Formal dan Otomata<br>
		Grafika Komputer<br>
		Jaringan Komputer<br>
		Komputasi Numerik<br>
		Pengelolaan Basis Data<br>
		Sistem Informasi<br>
		</td>
		<td colspan="2">Semester 4</td>
	</tr>
	<tr>
		<td>
		Analisa & Perancangan Perangkat Lunak<br>
		Pengembangan aplikasi Web<br>
		Strategi Algoritma<br>
		Pengolahan Citra<br>
		Interaksi Manusia dan Komputer<br>
		Keamanan Data dan aplikasi<br>
		Penambangan Data <br>
		Technopreneurship
		</td>
		<td colspan="2">Semester 5</td>
	</tr>
	</table>
</body>
</html>