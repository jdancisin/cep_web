<?php
  // load records from 'site_sections'
  list($mainNav, $mainNavMetaData) = getRecords(array(
    'tableName'   => 'site_sections',
    'loadUploads' => true,
    'allowSearch' => false,
    'where' => 'show_in_nav = 1',
  ));
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $titleTag; ?></title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="language" content="en">
		<meta name="verify-v1" content="N3VH9tb5q/hUiA1BA9S21+pen1v3J5Ef2SMV/Yma+KY=" />
		<meta name="description" content="">

		<?php $page_url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
		<meta property="og:site_name" content="Colombia en Pittsburgh"/>
		<meta property="og:url" content="<?php echo $page_url ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php if($titleTag) echo $titleTag; ?>" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="https://www.colombiaenpittsburgh.org<?php echo $share_image; ?>" />

		<link rel="canonical" href="<?php echo $page_url ?>">

		<link href='//fonts.googleapis.com/css?family=Roboto+Slab:700,900|Lato:300,300i,700,700i,900' rel='stylesheet' type='text/css'>
		<link href="/styles/reset.css" rel="stylesheet" type="text/css" media="screen, projection, print" />
		<link href="/styles/styles-20230505.css" rel="stylesheet" type="text/css" media="screen, projection" />

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MV6J59S');</script>
		<!-- End Google Tag Manager -->

	</head>
<body class="<?php echo $bodyclass; ?>">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV6J59S"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="site-header-wrap">
		<div class="site-header">
			<a href="/" class="site-logo"><img src="/images/cep-logo-horiz.svg" alt="Colombia en Pittsburgh"></a>
			<button class="nav-toggle">
				<img src="/images/icon-openNav.svg" class="open-nav-icon">
				<img src="/images/icon-closeNav.svg" class="close-nav-icon">
			</button>
			<div class="siteNav">
				<nav class="mainNav">
					<?php foreach ($mainNav as $mainNav_item): ?>
						<a href="<?php echo htmlencode($mainNav_item['url']) ?>" class="mainNav_item<?php if($mainNav_item['num'] == $current_section['num']) echo " mainNav_item--active"; ?>">
							<?php echo htmlencode($mainNav_item['nav_text']) ?>
						</a>
					<?php endforeach ?>
					<a href="https://www.paypal.com/donate?hosted_button_id=8GDRH4Z8N2S66" class="mainNav_item mainNav_item--donate">Donate</a>
				</nav>
				<nav class="socialNav">
					<a href="https://www.facebook.com/colombiaenpittsburgh" class="socialNav_item"><img src="/images/icon-facebook.svg" alt="facebook"></a>
					<a href="https://www.instagram.com/colombiaenpittsburgh/" class="socialNav_item"><img src="/images/icon-instagram.svg" alt="instagram"></a>
					<!-- <a href="https://twitter.com/colpit" class="socialNav_item"><img src="/images/icon-twitter.svg" alt="twitter"></a> -->
				</nav>
			</div>
		</div>
	</header>

		<?php if($bodyclass == "homepg" && $heroText) : ?>
			<div class="siteHeader_hero">
				<div class="siteHeader_txt">
					<?php echo $heroText; ?>
					<?php if(isset($eventDayTime)) : ?>
						<div class="siteHeader_dayTime"><?php echo $eventDayTime; ?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if($bodyclass == "search"): ?>
			<div class="siteHeader_hero">
				<div class="siteHeader_search">
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
					<gcse:searchbox-only></gcse:searchbox-only>
				</div>
			</div>
		<?php endif; ?>

	<?php if ($bodyclass == "123homepg") : ?>
		<div class="adBanner">
			<a href="https://www.pa.gov/covid/?utm_source=colombiaenpittsburgh"><img src="/ads/pa-doh-covid19-750x100.jpg" alt=""></a>
		</div>
	<?php endif; ?>
			
	<main class="content">
		
