<?php



$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);
//header("Location:../logout.php");/











$keys = array_keys($_POST);
for($i=0;$i<count($_POST);$i++){
$id = $_POST[$keys[$i]];
	$i = $i + 1;  
$handset = $_POST[$keys[$i]];
$ses_sql = mysql_query("UPDATE demosims SET handset='$handset'" . " WHERE id='$id'", $connection);

	$i = $i + 1;    

$sim = $_POST[$keys[$i]];

$ses_sql = mysql_query("UPDATE demosims SET sim_number='$sim'" . " WHERE id='$id'", $connection);


}

//for ($i = 1; $i <= 10; $i++) {
//    echo $i;
//}







mysql_close($connection);


echo '<script type="text/javascript">';
echo 'alert("Demo Audit has been updated");';
echo 'window.location="../profile.php";';
echo '</script>';


 //   } else {
//	echo '<script type="text/javascript">';
//echo 'alert("Error uploading photo");';
//echo 'window.location="../profile.php";';
//echo '</script>';

//    }
//}
?>
