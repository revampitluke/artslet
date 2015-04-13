

<?php
require_once('../php/autoloader.php');
 
// We'll process this feed with all of the default options.
$feed = new SimplePie();
$feed->set_feed_url('http://feeds.feedburner.com/telstra-announcements');
 
// Set which feed to process.
 
// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();
 

?>


 
<link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<script src="../plugins/jquery/jquery-2.1.0.min.js"></script>
<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Home</a></li>
			<li><a href="#">News Feed</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">

	
<?php
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	*/
	foreach ($feed->get_items() as $item):
	?>
 
		<div class="item">
			<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
			<p><?php echo $item->get_description(); ?></p>
			<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div>
 
	<?php endforeach; ?>
</div>
<!--End Dashboard 1-->

