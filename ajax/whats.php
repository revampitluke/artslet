<?php
session_start();
$message = $_POST['Message'];
$target = $_POST['phonenumber'];

require '../src/whatsprot.class.php';

$username = "61455055532";
$nickname = "Intranet";
$password = "aPiTXsYOWc8VbOnhDHXPpEc4adE=";
$debug = true;

$w = new WhatsProt($username, $nickname, $debug);
$w->connect();
$w->loginWithPassword($password);
//$target = "61414087861";
// $message = "Test";
$amended = "[NoReply] " . $_SESSION["name"] . " : " . $message;
$w->sendMessage($target, $amended);

?>
