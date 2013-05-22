<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/style.css"; ?>" />
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/jquery-1.7.2.min.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/jquery.watermark.min.js" ?>"></script>	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()."/js/core.js" ?>"></script>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()."/stylesheet/ie7.css" ?>">
	<![endif]-->
</head>
<body <?php body_class(body_classes()) ?> id="page-body-id-<?php echo $post->ID ?>">
	<div id="main-container">
		<div id="menu" class="slide menu">
			<div class="menu-content">
				<div class="menu-banner">
					<img src="<?php echo image_url(); ?>/accenture.jpg" alt="Accenture" height="97" width="147" />
				</div>
				<p class="menu-intro">Use this menu to navigate Chapters and Articles</p>
				<a id="menu-close" class="button-a" href="#"><span class="arrow">l</span>Close</a>
				<nav>
					<ul>
					<?php 
						$args1 = array(
							'parent' => '0',
							'exclude' => '8',
							'sort_column' => 'menu_order'
						);		

						$chapters = get_pages($args1); ?>

					<?php foreach($chapters as $chapter) : ?>
						<li class="menu-item">
							<div class="menu-chapter">
								<img class="menu-thumbnail" src="<?php echo image_url(); ?>/thumb-placeholder.jpg" alt="" height="59" width="151" />
								<a href=""><?php echo $chapter->post_title; ?></a>
							</div>
							<ul class="article-list">
							<?php 
								$args2 = array(
									'child_of' => $chapter->ID,
									'title_li' => ''
								);

								echo wp_list_pages($args2);
							?>
							</ul>
						</li> 
					<?php endforeach; ?>
					</ul>
				</nav>
				<a class="button-b download-full-pdf-button" href="" title="()"><span class="arrow">r</span><span class="label">Download Full PDF</span></a>
			</div><!-- end div.menu-content -->
		</div><!-- end div.menu -->
		<div id="banner">
			<img id="desktop-banner" src="<?php echo image_url(); ?>/banner_1024.png" border="0">
			<img id="mobile-banner" src="<?php echo image_url(); ?>/banner_320.png" border="0">
		</div>

