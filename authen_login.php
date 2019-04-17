<?php
 require('inc/connection.inc.php');

if (isset($_POST['user_email']) and isset($_POST['user_password'])){

// Assigning POST values to variables.
$email = $_POST['user_email'];
$password = $_POST['user_password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `tblStaff` WHERE email='$email' and password='$password'";

$result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);

if ($count == 1){

// Session
$_SESSION['logged'] = 1;
$_SESSION['username'] = $row['username'];
// redirect to staff page
header('Location: asset-tables.php');

}
else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
