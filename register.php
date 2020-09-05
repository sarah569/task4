<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/image-11.jpg); background-size: cover; background-position: center;">
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-12">
					<h2>Register Here</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Phone Number</label>
							<input type="number" name="phone" class="form-control" required>
							<small>Format: 01123456789</small>
						</div>

						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" required>
						</div>

						<button type="submit" name="register" class="btn btn-success">Register</button>

					</form>

					<form action="login.php" method="get">
						<input type="submit" value="Go to Login" id="login" class="btn btn-primary float-right">
					</form>

				</div>
			</div>
		</div>
	</div>

</body>
</html>




