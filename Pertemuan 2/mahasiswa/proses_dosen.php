<?php //filename: proses_mhs.php 
include("db.php");

if($_GET['action'] =="add") {
	// 2. Query
	$query = "INSERT INTO dosen (kode_dosen, nama_dosen)
			  VALUE ('$_POST[kode_dosen]', '$_POST[nama_dosen]')";
}else if($_GET['action'] == "edit"){
	// 2. Query
	$query = "UPDATE dosen
			  SET kode_dosen = '$_POST[kode_dosen]',
			      nama_dosen = '$_POST[nama_dosen]'
			  WHERE id = $_POST[id]";
}else if ($_GET['action'] == "delete"){
	$query = "DELETE FROM dosen
			  WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);
// REDIRECT KE TEMPALTE.php
header('Location: template.php?page=dosen');
?>