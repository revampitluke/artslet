<?php
session_start();
?>


<html>
<script src="../js/jquery-1.9.1.min.js"></script>

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">Messaging</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-10">
		<h3>Messaging</h3><br>


</p>
<div id = "msgDiv" class="col-xs-10">
<form id="contactList">
<select id="phonenumber" name="phonenumber">
<?php if ($_SESSION["role"] == "admin") : ?>
<option value="61435371887-1416954725">Ground Floor(Group)</option>
<option value="61435371887-1416960819">Level 1 (Group)</option>
<option value="all">Both Stores (Groups)</option>
<?php endif; ?>
<?php
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
// SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select name,contact from login", $connection);
$rows = mysql_num_rows($query);
//$staff = mysql_fetch_array($query);

while($staff = mysql_fetch_array($query)){
	echo '<option value="' . $staff['contact']. '">' . $staff['name'];
	
}
mysql_close($connection);

?>

</select><br>


<textarea name="Message" id="MessageW" rows="10" cols="20" placeholder="Type your message here"></textarea><br>
<input type="submit" value="Send" />
</form>
</div>


</div>

<script>
$( document ).ready(function() {
var request;

// Bind to the submit event of our form
$("#contactList").submit(function(event){

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "ajax/whats.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
	$('#MessageW').val('Message sent!');
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});	

});
</script>  

</html>

