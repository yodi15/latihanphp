<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit Mahasiswa</h1>";
	include("db.php");
	$query = "SELECT * FROM mahasiswa
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query ($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add Mahasiswa";
	$row['nim'] = "";
	$row['nama'] = "";
	$row['jurusan'] = "";
	$row['id'] = "";
}
?>
<form action="proses_mhs.php?action=<?php echo $_GET['action']; ?>" method="post">
	NIM
	<input type="text" name="nim" Value="<?php echo $row['nim']; ?>" />
	<br /> 
	Nama
	<input type="text" name="nama" Value="<?php echo $row['nama']; ?>" />
	<br /> 
	Jurusan
	<input type="text" name="jurusan" Value="<?php echo $row['jurusan']; ?>" />
	<br /> 
	<input type ="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>
