<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

	<!-- Popper JS -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

	<!-- Latest compiled JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
	<link rel="shortcut icon" type="image/png" href="icon.png"/>

</head>
<body>
	<div class="container">
	  <form action="register_submit.php" method="POST">
		<div class="panel panel-primary">
			<div class="panel-heading">
					<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
				</div>
				<div class="panel-body">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="username">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input type="date" class="form-control" id="birthday" name="birthday">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Confirmation Password:</label>
					  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="repassword">
					</div>
					
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address">
					</div>
					<button  type="submit" class="btn btn-success" name="submit">Register</button>
				</div>
			</div>
	 </form>
		</div>
</body>
</html>