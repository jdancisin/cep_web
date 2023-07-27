<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";


  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '5'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

	$titleTag = $current_section['title'];
	$heroText = $current_section['hero_text'];
	$bodyclass = "contact_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

<div class="content--narrow">

	<h1><?php echo $heroText; ?></h1>

	<div class="columns-sidebar">
		<div class="main">

			<p>If you would like to contact us complete the form below, or <a href="mailto:colombiaenpittsburgh@gmail.com">send us an email</a>.</p>

			<div class="divider"></div>
			
				<div id="wufoo-q7x4a9">
				</div>
				<script type="text/javascript">var q7x4a9;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'colombiaenpittsburgh', 
				'formHash':'q7x4a9', 
				'autoResize':true,
				'height':'672',
				'async':true,
				'header':'hide',
				'ssl':true,
				};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { q7x4a9 = new WufooForm();q7x4a9.initialize(options);q7x4a9.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>
			</div>

		

		<div class="sidebar">
		</div>

	</div>

</div>


<?php include('../includes/footer.inc.php'); ?>
