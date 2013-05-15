<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/style.css"; ?>" />
</head>
<body class="<?php body_class(body_classes()) ?>" id="page-body-id-<?php echo $post->ID ?>">
		<div id="main-container">
		<div id="banner">
			<img id="desktop-banner" src="<?php echo image_url(); ?>/banner_1024.png" border="0">
			<img id="mobile-banner" src="<?php echo image_url(); ?>/banner_320.png" border="0">
		</div>


		<div id="menu-container">
			<a id="menu-button" href="#" title="menu">
			</a>
			<div id="menu-instructions"><?php echo strip_tags(get_post(26)->post_content, "<a>"); ?></div>
		</div>

		<div id="header-container">
			<div id="welcome-message">
				<h1><?php echo strip_tags(get_post(28)->post_content, "<h1><br>"); ?></h1>

				<a id="download-full-pdf-button" href="#" title="Download Full PDF"><img src="<?php echo image_url(); ?>/download-full-pdf-button_1024.png" border="0" /></a>
			</div>
			<?php
				$responsive = new responsive_meta();
				$header_image = $responsive->return_images("page_heading_image");
			?>
			<img id="desktop-welcome-image" src="<?php echo $header_image->big ?>" border="0" />
			<img id="mobile-welcome-image" src="<?php echo $header_image->mobile ?>" border="0" />
		</div>

