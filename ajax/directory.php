<?php
session_start();
?>


<html>
<script src="../js/jquery-1.9.1.min.js"></script>

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">Directory</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-10">
		<h3>Directory</h3><br>


</p>
<table class="table table-hover">
<tr>
<th><h4>Name</h4></th>
<th><h4>Contact</h4></th>
</tr>
<tr><th>Stores</th><th></th></tr>
<tr><td>Ground Floor</td><td><a href="tel:0733981288">07 3398 1288</a></td></tr>
<tr><td>Level 1</td><td><a href="tel:0733982344">07 3398 2344</a></td></tr>
<tr><th>Departments</th><th></th></tr>
<tr><td>Foxtel Service Changes</td><td><a href="tel:03 8325 3132">03 8325 3132</a></td></tr>
<tr><td>Smart Communities (Velocity)</td><td><a href="tel:1800 008 994">1800 008 994</a></td></tr>
<tr><td>Customer Resolution Group</td><td><a href="tel:1800 784 294">1800 784 294</a></td></tr>
<tr><td>Control Group</td><td><a href="tel:1800 096 566">1800 096 566</a></td></tr>
<tr><td>PODS</td><td><a href="tel:1800 639 062">1800 639 062</a></td></tr>
<tr><td>Siebel Moves</td><td><a href="tel:1800 231 072">1800 231 072</a></td></tr>
<tr><td>Foxtel Moves</td><td><a href="tel:1800 308 367">1800 308 367</a></td></tr>
<tr><td>Bereavement Support</td><td><a href="tel:1800 602 632">1800 602 632</a></td></tr>
<tr><th>Staff</th><th></th></tr>
<tr><td>Rachel Newman</td><td><a href="tel:0400888903">0400888903</a></td></tr>
<tr><td>Luke Dunbar</td><td><a href="#" id="luke">0435371887</a></td></tr>
<tr><td>Emad Wahdan</td><td><a href="tel:0400300741">0400300741</a></td></tr>
<tr><td>Caitlin Burrill</td><td><a href="tel:0423793221">0423793221</a></td></tr>
<tr><td>Arash Ketabshi</td><td><a href="tel:0431067832">0431067832</a></td></tr>
<tr><td>Ingres Yap</td><td><a href="tel:0499988868">0499988868</a></td></tr>
<tr><td>John Bennett</td><td><a href="tel:0407847577">0407847577</a></td></tr>
<tr><td>Julie Bennett</td><td><a href="tel:0419772262">0419772262</a></td></tr>
<tr><td>Rachael Bennett</td><td><a href="tel:0434611617">0434611617</a></td></tr>
<tr><td>Liam Hill-Milnes</td><td><a href="tel:0455995556">0455995556</a></td></tr>
<tr><td>Melanie Turner</td><td><a href="tel:0498129035">0498129035</a></td></tr>
<tr><td>Anita Baker</td><td><a href="tel:0455886444">0455886444</a></td></tr>
<tr><td>Dave Jacobs</td><td><a href="tel:0403332373">0403332373</a></td></tr>
<tr><td>Alisha Vlug</td><td><a href="tel:0439618544">0439618544</a></td></tr>
<tr><td>Tasha Peck</td><td><a href="tel:0428870779">0428870779</a></td></tr>
<tr><td>Alex Turley</td><td><a href="tel:0425556750">0425556750</a></td></tr>
<tr><td>Mahdis Daniali</td><td><a href="tel:0450150575">0450150575</a></td></tr>
<tr><td>Roma Dayal</td><td><a href="tel:0425431081">0425431081</td></a></tr>
<tr><td>Kylie Holliday</td><td><a href="tel:0409254514">0409254514</a></td></tr>
<tr><td>Ross Thurlow</td><td><a href="tel:0422723006">0422723006</a></td></tr>
<tr><td>Peta Hill-Milnes</td><td><a href="tel:0434824024">0434824024</a></td></tr>
<tr><td>Prue Roff-Marsh</td><td><a href="tel:0413660546">0413660546</a></td></tr>
<tr><td>Corneels de Waard</td><td><a href="tel:0477777495">0477777495</a></td></tr>
<tr><td>Elizabeth Anger</td><td><a href="tel:0416190870">0416190870</a></td></tr>
<tr><td>Sarah-Jane Kidd</td><td><a href="tel:0478729339">0478729339</a></td></tr>
<tr><td>Ahmad Wahdan</td><td><a href="tel:0439582058">0439582058</a></td></tr>
<tr><td>Trent Brookes</td><td><a href="tel:0414087861">0414087861</a></td></tr>
<tr><td>Jo Mackinnon</td><td><a href="tel:0432846093">0432846093</a></td></tr></table></div>
<div id = "msgDiv">
<form id="contactList">
<select id="phonenumber" name="phonenumber">
<?php
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
// SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select fname,lname,contact from login", $connection);
$rows = mysql_num_rows($query);
//$staff = mysql_fetch_array($query);

while($staff = mysql_fetch_array($query)){
	echo '<option value="' . $staff['contact']. '">' . $staff['fname']. ' ' . $staff['lname'];
	
}
mysql_close($connection);

?>

</select>


<textarea name="Message" id="MessageW" rows="10" cols="20">Message</textarea>
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

