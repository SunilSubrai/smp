<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/style.css"; ?>" />
</head>
<body <?php body_class(body_classes()) ?> id="page-body-id-<?php echo $post->ID ?>">
	<div id="main-container">
		<div id="menu" class="slide menu">	
			<img src="<?php echo image_url(); ?>/menu-banner.jpg" alt="Accenture" height="113" width="311" />
			<p class="menu-intro">Use this menu to navigate Chapters and Articles</p>
			<a id="menu-close" href="#" title="Close menu"></a>
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
						<img class="menu-thumbnail" src="<?php echo image_url(); ?>/thumb-placeholder.jpg" alt="" height="59" width="151" />
						<a class="menu-chapter" href=""><?php echo $chapter->post_title; ?></a>
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
			<a id="download-full-pdf-button" href="" title="Download Full PDF ()"><img src="<?php echo image_url(); ?>/download-full-pdf-button_1024.png"></a>
		</div><!-- end div.menu -->
		<div id="banner">
			<img id="desktop-banner" src="<?php echo image_url(); ?>/banner_1024.png" border="0">
			<img id="mobile-banner" src="<?php echo image_url(); ?>/banner_320.png" border="0">
		</div>


