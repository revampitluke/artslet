<?php
$pass = $_POST['newPassword'];
$pass2 = $_POST['currentPassword'];
$pass3 = $_POST['confirmPassword'];

/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */









session_start();

$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);



$username = $_SESSION['login_user'];


if(count($_POST)>0) {
$ses_sql=mysql_query("select * from login where username='$username'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$hash  = $row["password"];

if (password_verify($pass2, $hash)) {
$newPassword2 = password_hash($pass, PASSWORD_DEFAULT);
$ses_sql = mysql_query("UPDATE login SET password='$newPassword2'" . " WHERE username='$username'", $connection);

//header("Location:../logout.php");
mysql_close($connection);

echo '<script type="text/javascript">';
echo 'alert("Password changed successfully. Please log in again");';
echo 'window.location="../logout.php";';
echo '</script>';





//}

//$message = "Password Changed";
//} else $message = "Current Password is not correct";
//}







}
else {

mysql_close($connection);

echo '<script type="text/javascript">';
echo 'alert("Unable to verify current password. Please try again");';
echo 'window.location="../profile.php";';

echo '</script>';



}
mysql_close($connection);

}
?>

