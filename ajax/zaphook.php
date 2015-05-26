<?php

//recieve data from webhook, explode the staff member out of the data

$data = $_POST['data'];
$comment = $_POST['comment'];
$pieces = explode("-", $data);

//name of consultant
$c1 =$pieces[0];
//sales week
$c3 = substr($pieces[1], 1);
$date =$pieces[3]. "-". $pieces[2]. "-". $c3;

//$date = substr($c2, 1);



//$staff='54c72e52768cc3eeed788698';
//https://api.trello.com/1/cards/5550024ddfd4360c59e0819c/idMembers?key=2b9e7d968e4d873a91fa5b00e879f98f&token=75e22aeb246e463aa3939c1edf7de73093ab1d970671136d15bdf9e8d61ddf81&$



$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);

$ses_sql = mysql_query("UPDATE performance SET comment='$comment'" . " WHERE name='$c1'". " AND date='$date'" , $connection);


mysql_close($connection); // Closing Connection

if (!$ses_sql) {
	$error = mysql_error();
}

//debugging mail

$to = "trent@thetelstrastore.com.au";
$subject = "Add Comment Zap";
$txt = $date. "\n\n\n" . $c1 ."\n\n\n" . $error . "\n\n\n";
$headers = "From: boh@thetelstrastore.com.au";

mail($to,$subject,$txt,$headers);








?>
