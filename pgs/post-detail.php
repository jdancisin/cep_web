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


	$titleTag = $page['title'];
	$heroText = "";
	$eventDayTime = date("F j, Y", strtotime($page['date']))." / ".$page['time_info'];
	$bodyclass = "post_detail";

	$share_image = "";
	foreach ($page['image'] as $upload) {
		$share_image = $upload['urlPath'];
	};
	include('../includes/header.inc.php');
?>


	<?php foreach ($page['image'] as $upload): ?>
		<div class="postDetail_graphic">
			<div class="key_image<?php if($page['image_border']) echo " with_border"; ?>">
				<img src="<?php echo $upload['urlPath'] ?>" alt="<?php echo $page['title']." - ".$eventDayTime; ?>">
			</div>
		</div>
	<?php 
		break; // stop after one image
		endforeach 
	?>

	<div class="postDetail_details">

		<h1 class="postDetail_title"><?php echo $page['title']; ?></h1>

		<?php if(isset($eventDayTime)) : ?>
			<section class="postDetail_meta">
				<span><?php echo date("F j, Y", strtotime($page['date'])); ?></span>
				<span><?php echo $page['time_info']; ?></span>
			</section>
		<?php endif; ?>

		<section class="postDetail_location">
			<h5>
				<?php if($page['location_info']): ?>
					<?php echo $page['location_info']; ?>
				<?php endif; ?>
			</h5>
			<?php if($page['google_map']): ?>
				<div class="postDetail_map">
					<div class="flexible-container">
						<?php echo $page['google_map'] ?>
					</div>
				</div>
			<?php endif; ?>
		</section>

		<section class="postDetail_content">
			<?php echo $page['content'] ?>
			<?php if($page['link']) : ?>
				<p>
					<a href="<?php echo $page['link']; ?>" class="btn"><?php echo $page['link_text']; ?></a>
				</p>
			<?php endif; ?>
			<?php echo $page['additional_details'] ?>
		</section>

		<?php foreach ($page['event_poster'] as $poster): ?>
			<section class="postDetail_poster">
				<div class="divider">
					<img src="<?php echo $poster['urlPath'] ?>">
				</div>
			</section>
		<?php endforeach ?>

		<?php if($page['form_code'] AND !$page['hide_form']): ?>
			<section class="postDetail_form">
				<div class="featured" id="form">
					<?php if($page['form_title']): ?>
						<h5><?php echo $page['form_title'] ?></h5>
					<?php endif; ?>
					<?php echo $page['form_code'] ?>
				</div>
			</section>
		<?php endif; ?>

	</div>


<?php include('../includes/footer.inc.php'); ?>
