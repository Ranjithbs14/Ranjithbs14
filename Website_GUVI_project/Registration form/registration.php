<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

	<div>
	<?php 
	if(isset($_POST['create']))
	{
	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$address 		= $_POST['address'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];

		$sql = "INSERT INTO users (firstname, lastname, address, email, phonenumber, password ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $address, $email, $phonenumber, $password]);
		if($result)
		{
			echo 'successfully saved.';

		}
		else
		{
			echo 'successfully not saved.';
		}

	}
	?>

</div>
	<form action="Registration.php" method="post">
		<div class="container"> 
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the details</p>
					<hr class="mb-3">

					<label for="firstname"><b>First name</b></label>
					<input class="form-control" type="text" name="firstname" required>

					<label for="lastname"><b>Last name</b></label>
					<input class="form-control" type="text" name="lastname" required>

					<label for="address"><b>Address</b></label>
					<input class="form-control" type="text" name="address" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" type="email" name="email" required>

					<label for="phonenumber"><b>Phone number</b></label>
					<input class="form-control" type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" type="password" name="password" required>

					<hr class="mb-3">
					<input class="btn btn-warning" type="submit" name="create" value="Sign up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function()
		{
			alert('hello.');
		});
</body>
</html>