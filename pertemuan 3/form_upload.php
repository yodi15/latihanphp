<?php
session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Upload</title>
</head>
<body>
<a href="logout.php">Logout</a>
<form action="proses_upload.php" method="POST" enctype="multipart/form-data">

<input type="file" name="gambar" />
<input type="submit" value="Upload" />

</form>

</body>
</html>