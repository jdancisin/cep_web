<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";


  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '2'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

  list($pastevents, $pasteventsMetaData) = getRecords(array(
    'tableName'   => 'events',
    'where' => 'archive=1',
  ));

	$titleTag = $current_section['title'];
	$heroText = "";

	$bodyclass = "events_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

	<p class="content--centered"><a href="/events/" class="btn">&laquo; Back to Recent Events</a></p>

	<div class="divider cards">
		<?php foreach ($pastevents as $event): ?>
			<article class="card">
				<div class="card-content">
					<h3><?php echo $event['title'] ?></h3>
					<p class="divider">
						<?php echo $event['date'] ?>
						<?php if($event['date'] AND $event['location']) echo "<br>" ?>
						<?php echo $event['location'] ?>
					</p>
					</div>
			</article>
		<?php endforeach; ?>
	</div>


<?php include('../includes/footer.inc.php'); ?>
