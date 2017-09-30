<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit DOSEN</h1>";
	include("db.php");
	$query = "SELECT * FROM dosen
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query ($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add DOSEN</h1>";
	$row['kode_dosen'] = "";
	$row['nama_dosen'] = "";
	$row['id'] = "";
}
?>
<form action="proses_dosen.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Dosen
	<input type="text" name="kode_dosen" Value="<?php echo $row['kode_dosen']; ?>" />
	<br /> 
	Nama Dosen
	<input type="text" name="nama_dosen" Value="<?php echo $row['nama_dosen']; ?>" />
	<br /> 
	<input type ="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>
