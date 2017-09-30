<?php //filename: proses_mhs.php 
include("db.php");

if($_GET['action'] =="add") {
	// 2. Query
	$query = "INSERT INTO dosen (kode_dosen, nama_dosen)
			  VALUE ('$_POST[kode_dosen]', '$_POST[nama_dosen]')";
}

mysqli_query($koneksi, $query);
// REDIRECT KE TEMPALTE.php
header('Location: template.php?page=dosen');
?>