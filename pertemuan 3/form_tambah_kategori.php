<?php // filename: form_tambah_kategori.php
session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<a href="logout.php">Logout</a>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kategori</h2>
	<form action="prosses_tambah_kategori.php" method="post">
		Keterangan:
		<input type="text" name="ket" />
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>