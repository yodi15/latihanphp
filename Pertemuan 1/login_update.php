<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])){
	updateUserTable();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="col-mc-6">
		<form action="login_update.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" />
			</div>
			<div class="form-group">
				<label for="username">Password</label>
				<input type="text" name="password" class="form-control" />
			</div>
			<div class="form-group">
				<select name="id" class="form-control">
				<?php
				showALLUserId();
				?>
				</select>
			</div>
			<input type="submit" name="submit" value="UPDATE" class="btn btn-primary" />
		</form>
	</div>
</div>

</body>
</html>