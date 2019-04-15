<?php
 require('inc/connection.inc.php');

if (isset($_POST['user_email']) and isset($_POST['user_password'])){

// Assigning POST values to variables.
$email = $_POST['user_email'];
$password = $_POST['user_password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `tblStaff` WHERE email='$email' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
