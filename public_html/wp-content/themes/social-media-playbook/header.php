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
		<div id="menu" class="slide menu">
			<div class="menu-content">
				<div class="menu-banner">
					<img id="menu-logo-desktop" src="<?php echo image_url(); ?>/logo-desktop.jpg" alt="Accenture"  />
					<img id="menu-logo-mobile" src="<?php echo image_url(); ?>/logo-mobile.jpg" alt="Accenture"  />
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

					<?php foreach($chapters as $chapter) :
						$chapterID = $chapter->ID;

						$thumbnail = get_field("page_heading_image_mobile", $chapterID);
						
						$thumbnailUrl = $thumbnail['url'];

						$args2 = array(
							'child_of' => $chapterID,
							'parent' => $chapterID,
							'title_li' => '',
							'hierarchical' => 0
						);

						$articles = get_pages($args2); ?>

						<li class="menu-item">
							<a class="menu-title" href="<?php echo $chapter->guid; ?>"><?php echo $chapter->post_title; ?></a>
							<div class="menu-chapter-animate">
								<div class="menu-thumbnail" style="background-image:url('<?php echo $thumbnailUrl; ?>')"></div>
							</div>
							
							<?php if(count($articles) == 0) continue; ?>

							<ul class="article-list">
								<?php foreach($articles as $article) :
									get_post_meta( $chapterID, '_wp_page_template', true ) == 'template.introduction-page.php' ? $url = $chapter->guid : $url = $article->guid; ?>

									<li><a href="<?php echo $url; ?>"><?php echo $article->post_title;?></a></li>
								<?php endforeach; ?>
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

