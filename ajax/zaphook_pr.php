<?php

//recieve data from webhook, explode the staff member out of the data

$data = $_POST['staff'];
$pieces = explode("-", $data);

//name of consultant

$c1 =$pieces[0];
$pieces2 = explode(" ", $c1);
$name = $pieces2[0];
//sales week
$date =$pieces[1]. "-". $pieces[2]. "-". $pieces[3];





$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);
$ses_sql=mysql_query("select * from login where name='$c1'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$to = $row['email'];
mysql_close($connection); // Closing Connection


if (!$ses_sql) {
	$error = mysql_error();
}

//send email

$subject = "[Intranet] Performance Report Confirmation";
$txt = "Hi " . $name. ",\n\nThis email is to confirm that you have successfully submitted your Weekly Performance Report, dated ". $date. "\n\n\nRegards,\n\n\nTelstra Stores Carindale" ;
$headers = "From: manager@thetelstrastore.com.au";

mail($to,$subject,$txt,$headers);








?>
