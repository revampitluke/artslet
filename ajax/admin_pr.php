


<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">Dashboard</a></li>
		</ol>
	</div>
</div>
















<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-table"></i>
					<span>Submitted Reports</span>
				</div>
				<div class ="no-move"></div>

			</div>

			<div class="box-content">



<?php

$data_array = array();

$today = date('j-m-Y');
$today2 = strtotime($today);
$thursday = strtotime("last thursday", $today2);
$readable_date = date ('d-m-Y', $thursday);
$data_date = date ('Y-m-j', $thursday);
//echo date ('Y-m-j', $thursday);
echo '<b>Current Performance Week: '. $readable_date. '</b><p>';
echo '<table class = "table table-bordered beauty-table"><thead><tr><th>Name</th><th>Sales Week</th></tr></thead><tbody>';




$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
//SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select * from performance where date='$data_date' order by name asc", $connection);
$rows = mysql_num_rows($query);
while($data = mysql_fetch_array($query)){
        if (!empty($data['id'])) {
echo '<tr><td>'. $data['name']. '</td>' ;
$date = strtotime($data['date']);
echo '<td>' . date('d-m-Y',$date). '</td></tr>' ;




}
}

echo '</tbody>';
echo '</table>';
$query = mysql_query("select * from performance where date='$data_date' order by name asc", $connection);

while($row = mysql_fetch_array($query)) {
    // Append to the array
    $data_array[] = $row['name'];   
}


echo '<b>Outstanding Reports:</b><p><p>';

$query2 =mysql_query("select name from login where active=1 and role='ca'", $connection);
 while($data3 = mysql_fetch_array($query2)){
	if (in_array($data3['name'], $data_array)) {
}
else {
echo $data3['name'] . "<br>";
}
}


mysql_close($connection);






?>
</tbody>
</table>





















			</div>
		</div>
	</div>




