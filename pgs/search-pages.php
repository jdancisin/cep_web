<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";

	$titleTag = "Search Results";
	$heroText = "";
	$bodyclass = "search";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

<div class="postDetail">

	<h2>Search Results</h2>

	<div class="postDetail_content">
		 <script>
		  (function() {
		    var cx = '015738415365349873916:g9bxexytfjs';
		    var gcse = document.createElement('script');
		    gcse.type = 'text/javascript';
		    gcse.async = true;
		    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		        '//www.google.com/cse/cse.js?cx=' + cx;
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(gcse, s);
		  })();
		</script>
		<gcse:searchresults-only></gcse:searchresults-only>
	</div>

</div>


	


<?php include('../includes/footer.inc.php'); ?>
