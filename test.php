<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);
//session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from login where name='LIAM HILL MILNES'", $connection);
$row = mysql_fetch_assoc($ses_sql);

$role = $row['role'];
$login_session =$row['name'];
$avatar = $row['photo'];
$trello = $row['trello'];

//$_SESSION["name"] = $login_session;
//$_SESSION["role"] = $role;
//$_SESSION["avatar"] = $avatar;
//$_SESSION["pr_name"] = $login_session;
//$_SESSION["trello"] = $trello;
print_r ($row);
echo "<p>";

$ses_sql=mysql_query("select date from performance where name='LIAM HILL MILNES' order by date desc", $connection);
$row = mysql_fetch_assoc($ses_sql);
$pr_date= $row['date'];
$_SESSION["pr_date"] = $pr_date;
echo $_SESSION["pr_date"];



$olddate = DateTime::createFromFormat ('Y-m-j', $_SESSION["pr_date"]);
$today = date('j-m-Y');
echo date_format($olddate, 'j-m-Y');
echo date('j-m-Y');
echo date('w');
echo date('w', strtotime($olddate));
$today2 = strtotime($today);
$thursday = strtotime("last thursday", $today2);
echo date ('Y-m-j', $today3);
//if(!isset($login_session)){
mysql_close($connection); // Closing Connection
//header('Location: ../index.php'); // Redirecting To Home Page
//}
?>
