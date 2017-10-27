<?php // filename: form_edit_kontak.php
include("koneksi.php");

session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}

$id = $_GET['id'];
$query = "SELECT * FROM kontak
			WHERE id=$id";
$hasil = mysqli_query($db, $query);
$row   = mysqli_fetch_assoc($hasil);

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
	<h2>Edit Kontak</h2>
	<?php
	$x = "SELECT * FROM kategori";
	$y = mysqli_query($db, $x);
	?>
	<form action="prosses_edit_kontak.php" method="post">
		Nama:
		<input type="text" name="nama" value="<?php echo $row['nama']; ?>" />
		<br />
		Phone:
		<input type="text" name="phone" value="<?php echo $row['phone']; ?>" />
		<br />
		Email:
		<input type="text" name="email" value="<?php echo $row['email']; ?>" />
		<br />
		Kategori:
		<select name="kategori">
			<?php
			include("koneksi.php");
			$query = "SELECT * FROM kategori";
			$hasil = mysqli_query($db, $query);
			while($data=mysqli_fetch_array($hasil)){
				echo "<option value=$data[id]>$data[keterangan]<?option>";
			}
			?>
		</select>
		<br />
		<input type="hidden" name="id" value="<?php echo $row['id']; ?> " />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>