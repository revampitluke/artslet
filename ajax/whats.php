<?php
session_start();
$message = $_POST['Message'];
$target = $_POST['phonenumber'];
$store1 = "61435371887-1416954725";
$store2 = "61435371887-1416960819";
	
require '../src/whatsprot.class.php';

$username = "61455055532";
$nickname = "Intranet";
$password = "aPiTXsYOWc8VbOnhDHXPpEc4adE=";
$debug = true;

$w = new WhatsProt($username, $nickname, $debug);
$w->connect();
$w->loginWithPassword($password);
// $message = "Test";
$amended = $_SESSION["name"] . " (noreply) " . "\n " . $message;
//$w->sendMessage($target, $amended);
//$w->sendGetGroups($message);



if ($target == "all") {
$w->sendMessage($store1, $amended);
$w->sendMessage($store2, $amended);

} else {
$w->sendMessage($target, $amended);
}


?>
