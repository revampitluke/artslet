


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
					<span>Demo SIMs</span>
				</div>
				<div class ="no-move"></div>

			</div>

			<div class="box-content">
<form action="ajax/demoupdate.php" method="POST">

		<table class = "table table-bordered beauty-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Mobile</th>
							<th>Handset</th>
							<th>IMEI</th>	
<th>SIM</th>
						</tr>
					</thead>
					<tbody>


<?php


$store = 'EBFY';


$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
//SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select * from demosims where store ='$store'", $connection);
$rows = mysql_num_rows($query);

while($data = mysql_fetch_array($query)){
        if (!empty($data['id'])) {
echo '<tr><td><input type="hidden" name = "'. $data['id']. '" value="'. $data['id']. '">'.$data['id']. '</td>' ;
echo '<td>0'. $data['mobile_number'] . '</td>' ;
echo '<td><input type="text" name = "'. $data['id']. '_handset" value ="'.$data['handset']. '"></td>' ;

echo '<td><input type="number" name = "'. $data['id']. '_imei" value ="'.$data['imei']. '"></td>' ;
echo '<td><input type="number" name = "'. $data['id']. '_number" value ="'.$data['sim_number']. '"></td>' ;





}
}
mysql_close($connection);




?>
</tbody>
</table>


<input type="submit" value="Update">
</form>



















			</div>
		</div>
	</div>




