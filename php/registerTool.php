<?php
require_once('../src/whatsprot.class.php');

$debug = true;

echo "####################\n";
echo "#                  #\n";
echo "# WA Register Tool #\n";
echo "#                  #\n";
echo "####################\n";

echo "\n\nUsername (country code + number without + or 00): ";
$username = trim(fgets(STDIN));

// Create a instance of WhastPort.
$w = new WhatsProt($username, '', $debug);

echo "\n\nType sms or voice: ";
$option = fgets(STDIN);

try {
    $w->codeRequest(trim($option));
} catch(Exception $e) {
    echo $e->getMessage();
    exit(0);
}

echo "\n\nEnter the received code: ";
$code = str_replace("-", "", fgets(STDIN));

try {
    $result = $w->codeRegister(trim($code));
    echo "\nYour password is: ".$result->pw."\n";
} catch(Exception $e) {
    echo $e->getMessage();
    exit(0);
}
