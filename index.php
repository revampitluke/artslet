<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Intranet</title>
		<meta name="description" content="Telstra Stores Carindale Intranet">
		<meta name="author" content="TrentIT">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/artslet.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
		

	</head>
<body style="margin-bottom:60px;">
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" >
	
			<div class="box" style="border: 1px solid;box-shadow:0 0 0px;">
			
				<div class="box-content">
				<img src="img/logo2.png" style="max-width:100%;max-height:100%">
					<div class="text-center">
					
			
<div>
<form action="" method="post">
<label>Username :</label>
<input id="name" name="username" placeholder="" type="text"><p>
<label>Password :</label>
  <input id="password" name="password" placeholder="" type="password">
</div>
<div class="text-center">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<footer class ="footer" style="position:absolute;bottom:0;width:100%;height:50px;text-align:center;color:white;background: #525252 url(../img/devoops_pattern_b10.png) 0 0 repeat;">
  <p style="font-size:12px">Artslet Comm Pty Ltd &copy;2015 <br>
  Website developed and maintained by <a href="http://www.trentit.com.au">TrentIT</a>.</p>
</footer>

</html>
