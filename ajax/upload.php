<?php

?>


<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
</script>
</head>
<body>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">Change Selfie</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-10">
		<h3>Change Selfie</h3><br>
</div>
</div>
<form action="ajax/uploadproc.php" method="post" enctype="multipart/form-data">
    Select image to upload:<p>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload" name="submit">
</form>
</body></html>
