<?php 

$connection = mysqli_connect('localhost','root','','userregistration');

if(!$connection)
{
	die("there is no connection" . mysqli_error());
}

 ?>