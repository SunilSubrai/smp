<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/style.css"; ?>" />
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/jquery-1.7.2.min.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/jquery.watermark.min.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/jquery.multiple-bgs.min.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/core.js" ?>"></script>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()."/stylesheet/ie7.css" ?>">
	<![endif]-->
	<!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()."/stylesheet/ie8.css" ?>">
    <![endif]-->
</head>
<body <?php body_class(body_classes()) ?> id="page-body-id-<?php echo $post->ID ?>">
	<div id="main-container">
		<?php include "includes/include.rail.php"; ?>
		<div id="banner">
			<a href="/"><img id="desktop-banner" src="<?php echo image_url(); ?>/banner_1024.png" border="0">
			<img id="mobile-banner" src="<?php echo image_url(); ?>/banner_320.png" border="0"></a>
		</div>

