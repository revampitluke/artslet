


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
					<i class="fa fa-search"></i>
					<span>Reports</span>
				</div>
				<div class="no-move"></div>
			</div>

			<div class="box-content" id="accordion">


<?php

session_start();
$username = $_SESSION['name'];

$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
//SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select * from performance where name='$username' order by date desc", $connection);
$rows = mysql_num_rows($query);

while($data = mysql_fetch_array($query)){
	if (!empty($data['date'])) {
$pieces = explode("-", $data['date']);
$date = $pieces[2]. "/". $pieces[1]. "/". $pieces[0];

echo '<h3>'.$date. '</h3>' ;
echo '<div>';
echo '<p>What I Did Well:<b> '. $data['feedback1'].  '</b></p>';
echo '<p>What Areas Need My Attention:<b> '. $data['feedback2'].  '</b></p>';
echo '<p>What Am I Going to Change and Focus On This Week:<b> '. $data['feedback3'].  '</b></p>';
echo '<p>Total Bonus Earnt<b>:$'. $data['bonus']. ' bonus'. '</b></p>';
echo '<p>Total GP Per Hour:<b>$'. $data['gp']. '</b></p>';
echo '<p>Total KPI Achieved:<b> '. $data['kpitotal']. '%</b></p>';

echo '<p>Total NPS Episode Score:<b> '. $data['episode']. '</b></p>';
echo '<p>Total NPS Interaction Score:<b> '. $data['interaction']. '</b></p>';

	
echo '<p>Feedback:<b> '. $data['comment']. '</b></p>';




echo '</div>';



}
}
mysql_close($connection);
//}
?>

























			</div>
		</div>
	</div>


<script type="text/javascript"> $(document).ready(function() {
	var icons = {
		header: "ui-icon-circle-arrow-e",
		activeHeader: "ui-icon-circle-arrow-s"
	};
	// Make accordion feature of jQuery-UI
	$("#accordion").accordion({icons: icons, animate: 200 });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();
});
</script>
