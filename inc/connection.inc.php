<?php
{
	$db = new mysqli('localhost','djeffery','2021509','djeffery_assettracker');

	if (mysqli_connect_errno())
		{
			echo 'Error: Could not connect to database. Please try again later.';
			exit;
		}
}
?>
