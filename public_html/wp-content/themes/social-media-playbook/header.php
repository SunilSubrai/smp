<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/style.css"; ?>" />
</head>
<body <?php body_class(body_classes()) ?> id="page-body-id-<?php echo $post->ID ?>">
		<div id="main-container">
		<div id="banner">
			<img id="desktop-banner" src="<?php echo image_url(); ?>/banner_1024.png" border="0">
			<img id="mobile-banner" src="<?php echo image_url(); ?>/banner_320.png" border="0">
		</div>


