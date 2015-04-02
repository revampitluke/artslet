<?php



session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("au-cdbr-azure-east-a.cloudapp.net", "ba50639d35303f", "16a1b5c9");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("artsletaolxui2pf", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select password from login where username='$username'", $connection);
$rows = mysql_num_rows($query);
$logindata = mysql_fetch_array($query);


if ($rows == 0) {
	$error = "Invalid Username or Password";
	
}
else {
	$hash = $logindata[0];
	
if (password_verify($password, $hash)) {
    $_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php");
} else {
    $error = "Invalid Username or Password.";
}

	
	}

mysql_close($connection); // Closing Connection
}
}
?>