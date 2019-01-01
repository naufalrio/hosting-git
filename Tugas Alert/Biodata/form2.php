<!DOCTYPE html>
<html>
	<head>
		<title> Hasil Pengisian Form </title>
	</head>
	<body align="center">
		<h3>Data Pendaftar</h3>
		<?php
			echo "Nama: " .$_GET['nama']."</br>";
			echo "Password: " .$_GET['password']."</br>";
			echo "Jenis Kelamin: " .$_GET['jeniskelamin']."</br>";
			echo "Keahlian: " .$_GET['keahlian']."</br>";
			echo "Tempat Lahir: " .$_GET['tempatlahir']."</br>";
			echo "Deskripsi: " .$_GET['deskripsi']."</br>";
		?>
	</body>
</html>