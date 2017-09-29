<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="col-mc-6">
		
		<select name="id" class="form-control">
			<?php
				showALLUsersId();
				?>
		</select>

	</div>
</div>

</body>
</html>