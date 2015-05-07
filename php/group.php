<?php
require '../src/whatsprot.class.php';



function GetGroups($mynumber, $groups) {
     var_dump($groups);
}
$username = "61455055532";
$nickname = "SysAdmin";
$password = "aPiTXsYOWc8VbOnhDHXPpEc4adE="; // The one we got registering the number
$debug = true;

// Create a instance of WhastPort.
$w = new WhatsProt($username, $nickname, $debug);
$w->eventManager()->bind("onGetGroups","GetGroups");
$w->Connect();
$w->LoginWithPassword($password);
$w->sendGetPrivacyBlockedList();
$w->sendClientConfig();
$w->sendGetServerProperties();
$w->sendGetHasVoipEnabled($contacts);
$w->sendGetGroups();






?>
