<?php

session_start();
?>


<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">Performance Reports</a></li>
		</ol>
	</div>
</div>
<?php if ($_SESSION["role"] == "admin") : ?>
<label>Staff Name</label></br>

<form id="myForm">
<input id="staff_name" name="staff_name" type="text" size="50" /><input type="submit" value="Go"></form>
<p>
<?php endif; ?>













<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Reports: <?= $_SESSION['pr_name']?></span>
				</div>
				<div class="no-move"></div>
			</div>

			<div class="box-content" id="accordion">


<?php

session_start();
	$username= $_SESSION['pr_name'];
	//$username = $_SESSION['name'];

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
	//WinMove();
 var availableTags = <?php include('staffautocomplete.php'); ?>;
 $("#staff_name").autocomplete({
        source: availableTags,
        autoFocus:true
    });

$('#myForm').submit(function(evt){
    var $form = $(this);
    // Let's select and cache all the fields
    // Serialize the data in the form
    var serializedData = $form.serialize();


    evt.preventDefault(); // Prevents default submission
  request = $.ajax({
        url: "ajax/pr_session.php",
        type: "post",
        data: serializedData
    });
    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
	LoadAjaxContent('ajax/pr.php');

    });


});



});
</script>
