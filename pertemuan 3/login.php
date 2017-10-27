<h1>LOGIN</h1>
<h3> Anda harus login terlebih dahulu untuk meliat Phone book </h3>
<h3> Bila tidak memiliki Username silahkan lakukan registrasi</h3>
<?php 
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
		header('Location: index.php');
	}
?>

<form action="proses_login.php" method="post">
	Username:
	<input type="text" name="username" />
	<br />
	<br />
	&nbspPassword:
	<input type="text" name="password" />
	<br />
	<br>
	<input type="submit" value="Login" />
	<a href="form_regis.php">Registrasi</a>
</form>
