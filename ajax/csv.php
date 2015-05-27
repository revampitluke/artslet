<?php
require_once 'parsecsv.lib.php';

$arrResult = new parseCSV('plan.csv');
print_r ($arrResult->data);



?>
