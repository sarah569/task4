<?php 

include("db.php");

session_start();

if(isset($_POST['register']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$sql = "SELECT * FROM users WHERE name = '$username'";

	$result = mysqli_query($connection,$sql);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo "<script> alert('this username already taken');window.location='register.php'</script>";
	}
	else
	{
		$reg = "INSERT INTO users(name,email,password,phone,address) VALUES ('$username','$email','$password','$phone','$address')";
		mysqli_query($connection,$reg);
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		echo "<script> alert('thank you for successful registration');window.location='home.php'</script>";
	}

}

 ?>