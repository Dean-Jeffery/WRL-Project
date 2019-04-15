<?php

// include database connection file
include_once('inc/connection.inc.php');

// check to see if the form has been submitted
if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT userame, password FROM customers WHERE userName = '$username' AND password = '$password'";
	$result = $db -> query ($query);

	if ($result -> num_rows >0)
	{
		echo "logged in";
	}

	else
	{
		echo "Username or password is Incorrect";
	}
}

?>
