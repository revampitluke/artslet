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
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="../css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
		

	</head>
<body style="margin-bottom:60px;">
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
	
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">My Login</h3>
			
<div class="text-left">
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="" type="text"><p>
<label>Password :</label>
<input id="password" name="password" placeholder="" type="password">
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
  <p>Artslet Comm Pty Ltd &copy;2015 <br>
  Website developed and maintained by <a href="http://www.trentit.com.au">TrentIT</a>.</p>
</footer>

</html>
