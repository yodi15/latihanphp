<?php //filename: proses_mhs.php 
include("db.php");

if($_GET['action'] =="add") {
	// 2. Query
	$query = "INSERT INTO mata_kuliah (kode_mtk, nama_mtk)
			  VALUE ('$_POST[kode_mtk]', '$_POST[nama_mtk]')";
}

mysqli_query($koneksi, $query);
// REDIRECT KE TEMPALTE.php
header('Location: template.php?page=matkul');
?>