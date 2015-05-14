<?php

//recieve data from webhook, explode the staff member out of the data

$cname = $_POST['staff'];
$card = $_POST['card'];
$pieces = explode("-", $cname);

//name of consultant
$c1 =$pieces[3];

//remove the blank space at the start

$consultant = substr($c1, 1);


//$staff='54c72e52768cc3eeed788698';
//https://api.trello.com/1/cards/5550024ddfd4360c59e0819c/idMembers?key=2b9e7d968e4d873a91fa5b00e879f98f&token=75e22aeb246e463aa3939c1edf7de73093ab1d970671136d15bdf9e8d61ddf81&$



$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);

$ses_sql=mysql_query("select * from login where name='$consultant'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$staff = $row['trello'];
mysql_close($connection); // Closing Connection

$url='https://api.trello.com/1/cards/'. $card. '/idMembers?&key=2b9e7d968e4d873a91fa5b00e879f98f&token=75e22aeb246e463aa3939c1edf7de73093ab1d970671136d15bdf9e8d61ddf81&value='.$staff;



//$value= '54b705e4c0bd8d2ef9db7ff1';
# init curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $value);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE); // make sure we see the sended header afterwards
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 0);
curl_setopt($ch, CURLOPT_POST, 1);

# dont care about ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

# download and close
$output = curl_exec($ch);
$request =  curl_getinfo($ch, CURLINFO_HEADER_OUT);
$error = curl_error($ch);
curl_close($ch);

echo 'This is output = '.$output .'<br />';
echo 'This is request = '.$request .'<br />';
echo 'This is error = '.$error .'<br />';




 	



?>
