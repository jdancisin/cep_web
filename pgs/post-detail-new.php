<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";

  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '1'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

  // load records
  list($page, $pageMetaData) = getRecords(array(
    'tableName'   => 'main_feed',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $page = @$page[0]; // get first record

  // show error message if no matching record is found
  if (!$page) {
    header('Location: /');
    exit;
  }


	$titleTag = truncate($page['title']);
	$heroText = "";
	$eventDayTime = date("F j, Y", strtotime($page['date']))." / ".$page['time_info'];
	$bodyclass = "post_detail";

	$status = $page['status:label'];	
	$today 			= date('Ymd');
	$eventDate 	= date("Ymd", strtotime($page['date']));
	if ( $status != "Canceled" && $eventDate < $today) {
		$status = "Past";
	} else {
		$status = $page['status:label'];	
	};

	$share_image = "";
	foreach ($page['image'] as $upload) {
		$share_image = $upload['urlPath'];
	};
	include('../includes/header.inc.php');
?>



	<div class="post-detail">

		<header class="post-detail-header">

			<span class="card-status"><?php echo $status ?></span>

			<h1 class="post-detail-title"><?php echo $page['title']; ?></h1>

			<?php if(isset($eventDayTime)) : ?>
				<p class="post-detail-meta">
					<?php echo date("F j, Y", strtotime($page['date'])); ?>
					<?php if($page['time_info']) : ?>
						<br><?php echo $page['time_info']; ?>
					<?php endif; ?>
				</p>
			<?php endif; ?>
				
			<?php if($page['location_info']): ?>
				<p class="post-detail-location">
					<?php echo $page['location_info']; ?>
				</p>
			<?php endif; ?>

			<?php if($page['google_map'] == "disabled" ): ?>
				<div class="flexible-container">
					<?php echo $page['google_map'] ?>
				</div>
			<?php endif; ?>

			<?php if($page['link']) : ?>
				<p>
					<a href="<?php echo $page['link']; ?>" class="btn"><?php echo $page['link_text']; ?></a>
				</p>
			<?php endif; ?>

		</header>

		<div class="post-detail-contentwrap">

			<?php foreach ($page['image'] as $upload): ?>
				<div class="post-detail-graphic">
					<img src="<?php echo $upload['urlPath'] ?>" alt="<?php echo $page['title']." - ".$eventDayTime; ?>">
				</div>
			<?php 
				break; // stop after one image
				endforeach 
			?>

			<div class="post-detail-content">

				<?php echo $page['content'] ?>

				<?php echo $page['additional_details'] ?>

				<?php foreach ($page['event_poster'] as $poster): ?>
					<section class="post-detail-poster">
						<div class="divider">
							<img src="<?php echo $poster['urlPath'] ?>">
						</div>
					</section>
				<?php endforeach ?>

				<?php if($page['form_code'] AND !$page['hide_form']): ?>
					<section class="post-detail-form">
						<div class="featured" id="form">
							<?php if($page['form_title']): ?>
								<h5><?php echo $page['form_title'] ?></h5>
							<?php endif; ?>
							<?php echo $page['form_code'] ?>
						</div>
					</section>
				<?php endif; ?>
			</div>

		</div>


	</div>


<?php include('../includes/footer.inc.php'); ?>
