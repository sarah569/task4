<?php 

include("db.php");
session_start();

if(!isset($_SESSION['username']))
{
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: url(images/image-11.jpg); background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		<form action="logout.php" method="get">
			<input type="submit" value="Logout" id="logout" class="btn btn-danger float-right">
		</form>
		<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	</div>
</body>
</html>