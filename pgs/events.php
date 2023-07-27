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

  // load records
  list($main_feedRecords, $main_feedMetaData) = getRecords(array(
    'tableName'   => 'main_feed',
    'where'   => 'category = 1',
    'allowSearch' => false,
  ));

	$titleTag = $current_section['title'];
	$heroText = $current_section['hero_text'];
	$bodyclass = "events_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

	<section class="cards">
	<?php foreach ($main_feedRecords as $record): ?>
				<?php
					$status = $record['status:label'];	

					$today 			= date('Ymd');
					$eventDate 	= date("Ymd", strtotime($record['date']));
					if ( $status != "Canceled" && $eventDate < $today) {
						$status = "Past";
					} else {
						$status = $record['status:label'];	
					};
				?>
				<article class="card status-<?php echo $status ?>">
					<a href="<?php echo $record['_link'] ?>">
						<?php 
							if($record['image']) : 
								foreach ($record['image'] as $upload):
						?>
							<div class="card-graphic">
								<img src="<?php echo $upload['thumbUrlPath'] ?>" loading="lazy">
							</div>
						<?php endforeach; endif; ?>

						<div class="card-content">
							<div class="card-title">
								<?php if($status == "Canceled") echo "Canceled: "; ?>
								<?php echo $record['title'] ?>
							</div>
							<p>
								<strong><?php echo date("F j, Y", strtotime($record['date'])) ?></strong><br>
								<?php echo $record['time_info']; ?><br>
								<!-- <?php echo $record['location_info']; ?> -->
							</p>
							<div class="card-status">
								<?php echo $status ?>
							</div>
						</div>
					</a>
				</article>
			<?php endforeach; ?>
	</section>
	
	<div class="divider content--centered">
		<a href="/events-archive/" class="btn">Events Archive</a>
	</div>

<?php include('../includes/footer.inc.php'); ?>
