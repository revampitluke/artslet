<?php
include('session.php');
session_start();

$valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
if (!$valid_session) {
   header('Location: index.php');
   exit();
}
//if (isset($_SESSION["name"])) {
//header('Location: index.php'); // Redirecting To Home Page
//}

?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Intranet</title>
		<meta name="description" content="description">
		<meta name="author" content="TrentIT">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/form.css" rel="stylesheet"> 
		<link href="css/pace.css" rel="stylesheet">
		<script src="js/pace.js"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="profile.php">Carindale</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						
						<div id="search">
						<!--	<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i> -->
						</div> 
					</div>
			
					<div class="col-xs-4 col-sm-8 top-panel-right">
					 <ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="ajax/directory.php" class="ajax-link">
									<i class="fa fa-phone"></i>
									<span class="badge"></span>
								</a> 
							</li>
							<li class="hidden-xs">
							<!--	 <a class="ajax-link" href="#"> -->
									<i class="fa fa-calendar"></i>
									<span class="badge"></span>
								</a>
							</li>
							<li class="hidden-xs">
								 <a href="ajax/message.php" class="ajax-link"> 
									<i class="fa fa-envelope"></i>
									<span class="badge"></span>
								</a>
							</li> 
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/avatar.jpg" class="img-rounded" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span><?php echo ($_SESSION["name"]); ?></span>
									</div>
								</a>
								<ul class="dropdown-menu">
										<li>
								<a href="ajax/directory.php" class="ajax-link">
									<i class="fa fa-phone"></i>
									<span>Directory</span>
								</a> 
							</li>
							<li><a href="ajax/message.php" class="ajax-link"><i class="fa fa-envelope"></i><span>Send Message</span></a></li>
									<!--<li>
										<a href="ajax/vcardphp.php" class="ajax-link">
											<i class="fa fa-user"></i>
											<span>Send VCard</span>
										</a>
									</li> 
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
										<a href="ajax/gallery_simple.html" class="ajax-link">
											<i class="fa fa-picture-o"></i>
											<span>Albums</span>
										</a>
									</li>
									<li>
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li> -->
									<li>
										<a href="logout.php">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.html" class="active ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle">
							<i class="fa fa-newspaper-o"></i>
						<span class="hidden-xs">News</span>
					</a>
					<ul class="dropdown-menu">
					<li><a class="ajax-link" href="ajax/telstra.php"><i class="fa fa-rss"></i><span>  Telstra</span></a></li>
					<li><a class="ajax-link" href="ajax/gsmarena.php"><i class="fa fa-rss"></i><span>  GSM Arena</span></a></li>
					<li><a class="ajax-link" href="ajax/gizmodo.php"><i class="fa fa-rss"></i><span>  Gizmodo</span></a></li>
					</ul>
					</li>
				  <?php if ($_SESSION["role"] == "admin") : ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Stats</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/trello.html"><i class="fa fa-bar-chart-o"></i><span >  Trello (WIP)</span></a></li>
			
					</ul>
				</li>
				<?php endif; ?>
				  <?php if ($_SESSION["role"] == "admin") : ?>
  	<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">Cameras</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/dashboard.html">Ground Floor (Disabled)</a></li>
						<li><a class="ajax-link" href="ajax/dashboard.html">Level 1 (Disabled)</a></li>
						
					</ul>
				</li>	
    <?php endif; ?>
			
			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Forms</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="forms/pr2.html"><i class="fa fa-tasks"></i><span >Performance Report</span></a></li>
						
						<?php if ($_SESSION["role"] == "admin") : ?>
						<li><a class="ajax-link" href="forms/review.html"><i class="fa fa-graduation-cap"></i><span >Monthly Performance Review</span></a></li>
						<li><a class="ajax-link" href="forms/cards.html"><i class="fa fa-credit-card"></i><span >Business Card Request</span></a></li>
<li><a class="ajax-link" href="forms/uniform.html"><i class="fa fa-shirtsinbulk"></i><span >Uniform Order</span></a></li>						
<?php endif; ?>
						
						<?php if ($_SESSION["role"] == "admin") : ?>
						<li><a class="ajax-link" href="forms/ra.html"><i class="fa fa-mobile"></i><span >RA Request</span></a></li>
						<?php endif; ?>
						<li><a class="ajax-link" href="forms/callback.html" ><i class="fa fa-paper-plane-o"></i><span >Manager Callback</span></a></li>
						<li><a class="ajax-link" href="forms/credit.html" ><i class="fa fa-money"></i><span >Credit Request</span></a></li>
						<li><a class="ajax-link" href="forms/orders.html" ><i class="fa fa-soccer-ball-o"></i><span >Customer Order </span></a></li>
						<li><a class="ajax-link" href="forms/foxtel.html" ><i class="fa fa-video-camera"></i><span>Foxtel Application</span></a></li>
						<li><a class="ajax-link" href="forms/fixed.html" ><i class="fa fa-phone"></i><span >Fixed Line Application</span></a></li>
						<li><a class="ajax-link" href="forms/bigpond.html" ><i class="fa fa-signal"></i><span>Bigpond Cable Application</span></a></li>
						<li><a class="ajax-link" href="forms/move.html" ><i class="fa fa-motorcycle"></i><span>Move Application</span></a></li>
						<li><a class="ajax-link" href="forms/repair.html" ><i class="fa fa-road"></i><span>Repair Entry</span></a></li>
						<li><a class="ajax-link" href="forms/npf.html" ><i class="fa fa-space-shuttle"></i><span>New Phone Feeling Dispatch</span></a></li>
						<li><a class="ajax-link" href="forms/interim.html" ><i class="fa fa-bolt"></i><span>Interim Broadband Service</span></a></li>
						<li><a class="ajax-link" href="forms/messages.html" ><i class="fa fa-envelope-o"></i><span>Message Staff</span></a></li>
						
			
					</ul>
				</li>
				<li class="dropdown">
					<a href="ajax/paperwork.html" class="ajax-link">
						<i class="fa fa-file-text-o"></i>
						 <span class="hidden-xs">Paperwork</span>
					</a>
			
			</li>
			<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-link"></i>
						 <span class="hidden-xs">Links</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="https://selfsolve.apple.com/deregister-imessage" target="_blank"><i class="fa fa-apple"></i><span>Deregister iMessage</span></a></li>
						<li><a href="http://netpro.ultimatefreehost.in" target="_blank"><i class="fa fa-paw"></i><span>NPS Tool</span></a></li>
						
			
					</ul>
				</li>
			
		</div>
		
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>

			<div id="ajax-content"></div>
		
		</div>
	
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
<script src="js/wufoo.js"></script>
<script src="js/date-en-AU.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="plugins/jQuery-Knob/jquery.knob.js"></script>
</body>




</html>
