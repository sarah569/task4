<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/image-11.jpg); background-size: cover; background-position: center;">
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-12">
					<h2>Login Here</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>

						<button type="submit" name="login" class="btn btn-success">Login</button>
					</form>

					<form action="register.php" method="get">
						<input type="submit" value="Back to Registration" id="register" class="btn btn-primary float-right">
					</form>

				</div>
			</div>
		</div>
	</div>

</body>
</html>