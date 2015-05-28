<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);

$role = $row['role'];
$login_session =$row['name'];
$avatar = $row['photo'];
$_SESSION["name"] = $login_session;
$_SESSION["role"] = $role;
$_SESSION["avatar"] = $avatar;
$_SESSION["pr_name"] = $login_session;



$valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
$avatar = $_SESSION['avatar'];
if (!$valid_session) {
   header('Location: ../index.php');
   exit();
}




//if(!isset($login_session)){
//mysql_close($connection); // Closing Connection
//header('Location: ../index.php'); // Redirecting To Home Page
//}
?>
