<?php 
	header('Content-type: text/html; charset=utf-8'); 
	require_once "admin/lib/viewer_functions.php";

  // load records
  list($page, $pageMetaData) = getRecords(array(
    'tableName'   => 'main_feed',
    'where'       => whereRecordNumberInUrl(1),
    'limit'       => '1',
  ));
  $page = @$page[0]; // get first record
  // show error message if no matching record is found
  if (!$page) {
    header('Location: /');
    exit;
  }
  
  permalinks_301redirectToPermalink($page);

  break;
?>
