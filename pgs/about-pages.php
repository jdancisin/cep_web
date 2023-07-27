<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";

  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '3'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

  // load records
  list($page, $pageMetaData) = getRecords(array(
    'tableName'   => 'about_us',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $page = @$page[0]; // get first record

  // show error message if no matching record is found
  if (!$page) {
    header("HTTP/1.0 404 Not Found");
    print "Record not found!";
    exit;
  }

	list($subnav, $subnavMetaData) = getRecords(array(
		'tableName'   => 'about_us',
		'loadUploads' => '0',
		'allowSearch' => '0',
	));

	if ($page['num'] == "5") {
		// load records
		list($amigosRecords, $amigosMetaData) = getRecords(array(
			'tableName'   => 'amigos',
			'loadUploads' => '0',
			'allowSearch' => '0',
		));
	}

	$titleTag = $current_section['title'];
	$heroText = $page['title'];
	$bodyclass = "about_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

<div class="content--narrow">

	<h1><?php echo $heroText; ?></h1>

	<div class="columns-sidebar">

		<div class="main">
			<?php echo $page['content'] ?>
			<?php if(@$amigosRecords): ?>
				<ul>
					<?php foreach ($amigosRecords as $record): ?>
						<li>
							<a href="<?php echo $record['url'] ?>">
								<?php echo $record['title'] ?>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			<?php endif; ?>
		</div>

		<div class="sidebar">
			<nav class="subNav">
				<?php foreach ($subnav as $record): ?>
					<a href="<?php echo $record['_link'] ?>" class="subNav_item<?php if($record['num']==$page['num']) echo " subNav_item--current"; ?>">
						<?php echo $record['title'] ?>
					</a>
				<?php endforeach; ?>
			</nav>
		</div>

	</div>

</div>
<?php include('../includes/footer.inc.php'); ?>
