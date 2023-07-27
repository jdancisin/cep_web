<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";


  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '4'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

  // load records from 'categories'
  list($categoriesRecords, $categoriesMetaData) = getRecords(array(
    'tableName'   => 'categories',
    'loadUploads' => true,
    'allowSearch' => false,
  ));


  // load records from 'listings'
  list($listingsRecords, $listingsMetaData) = getRecords(array(
    'tableName'   => 'listings',
    'loadUploads' => true,
    'allowSearch' => false,
  ));


	$titleTag = $current_section['title'];
	$heroText = $current_section['hero_text'];
	$bodyclass = "community_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

<div class="content--narrow">

	<h1><?php echo $heroText; ?></h1>

	<div class="columns-sidebar">

		<div class="main">
			<?php foreach ($categoriesRecords as $category): ?>
				<div class="community-listings">
					<h4><?php echo htmlencode($category['title']) ?></h4>
					<ul>
						<?php foreach ($listingsRecords as $listing): ?>
							<?php if($category['num'] == $listing['category']): ?>
								<li>
									<a href="<?php echo htmlencode($listing['website']) ?>">
										<?php echo htmlencode($listing['title']) ?>
									</a>      	
								</li>
							<?php endif; ?>
						<?php endforeach ?>
					</ul>
				</div>	
			<?php endforeach ?>
		</div>

		<div class="sidebar">
			<?php include('../includes/searchbox.inc.php'); ?>
			<div class="inset call2action">
				<p><a href="/contact/">Contact us</a> today to add your organization or business to this page.</p>
			</div>
			<?php include('../includes/socialmedia.inc.php'); ?>
		</div>

	</div>

</div>

	<?php include('../includes/footer.inc.php'); ?>
