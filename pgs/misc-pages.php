<?php 
	header('Content-type: text/html; charset=utf-8'); 
  require_once "../admin/lib/viewer_functions.php";
	require_once "../includes/functions.php";

  // load record from 'site_sections'
  list($current_section, $current_sectionMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'where'       => "`num` = '6'",
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $current_section = @$current_section[0]; // get first record

  // load records
  list($page, $pageMetaData) = getRecords(array(
    'tableName'   => 'miscellaneous_pages',
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


	$titleTag = $page['title'];
	$heroText = $page['title'];
	$bodyclass = "about_pg";
	$share_image = "/images/facebook-share-image.jpg";
	include('../includes/header.inc.php');
?>

<div class="columns">
	<div class="col1">	
		<?php echo $page['content'] ?>

		<?php if($page['show_form'] AND $page['form_code']) : ?>
			<div class="box box--outlined">
				<?php echo $page['form_code']; ?>
			</div>
		<?php endif; ?>

	</div>
	<div class="col2">	
		<?php echo $page['sidebar'] ?>
	</div>
</div>



<?php include('../includes/footer.inc.php'); ?>
