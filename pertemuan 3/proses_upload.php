<?php //filename: proses_upload.php

// Dapatkan extensi dari file yang diupload
$ext = explode(".", $_FILES['gambar']['name']);
$ext = end($ext);
echo $ext;

// deklarasi daftar extensi yang diperbolehkan
$ext_boleh = Array("jpg", "png", "gif");
// cek apakah extensi file ada di dalam list
// dapatkan ukuran file:
$size = $_FILES['gambar']['size'];
$sumber = $_FILES['gambar']['tmp_name'];
$tujuan = "uploads/" . $_FILES['gambar']['name'];
// data dari form
$nama = mysqli_real_escape_stirng($db, $_POST['nama']);
$phone = mysqli_real_escape_stirng($db, $_POST['phone']);
$email = mysqli_real_escape_stirng($db, $_POST['email']);
$kategori = $_POST['kategori'];
if(in_array($ext, $ext_boleh) && $size <=2*1024*1024){
	echo "file valid";
	$gambar = move_uploaded_file($sumber, $tujuan);
	$query = "INSERT INTO kontak (icon_path, nama, phone, email, kategori_id) 
			 VALUES ('$tujuan', '$nama', '$phone', '$email', '$kategori')";
	mysqli_query($db, $query);
}

header('location: index.php');