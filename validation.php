<?php 

include("db.php");
session_start();

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";

	$result = mysqli_query($connection,$sql);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('location:home.php');
	}
	else
	{
		header('location:login.php');
	}
}

 ?>