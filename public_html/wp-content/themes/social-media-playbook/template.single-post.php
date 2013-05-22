<?php
/*
Template Name: Single Post
*/		
?>
<?php get_header() ?>
		<?php include "includes/include.menu.php"; ?>

		<div id="header-container">
			<div id="article-message">
				<?php
					$x = get_post($post->post_parent)->post_title;
					$x = explode(":", $x);
					$chapter = trim($x[0]);
					$title 	 = trim($x[1]);
				?>
				<h2><?php echo $chapter ?></h2>
				<h1><?php echo $title ?></h1>
			</div>

			<div id="article-image">
				<?php
					$x 		= get_field( "post_heading" );
					$url 	= $x["url"];
					$alt  	= $x["alt"];
				?>
				<img src="<?php echo $url; ?>" alt="<?php echo $alt ?>" />
			</div>

		</div>

 		<div class="two-column two-one">

			<div class="column-one">

					<div class="content">
						<div class="title-pointer pointer-a">
							<div class="label"><?php echo $post->post_title ?></div>
						</div>

						<div class="sections">
							<?php echo apply_filters("the_content", $post->post_content); ?>
						</div>

						<div class="article-arrows">

							<div class="left-arrow"><span class="arrow">l</span> <a href="<?php echo get_permalink(prev_page()) ?>">Previous Article</a></div>

							<div class="right-arrow"><a href="<?php echo get_permalink(next_page()) ?>">Next Article</a> <span class="arrow">r</span></div>

						</div>
						
					</div>

					<div class="spacer"></div>

					<?php include "includes/include.article-include.php"; ?>

			</div>

			<div class="column-two">

					<div class="content">
						<div class="feature-pointer pointer-a">
							<div class="label">@Accenture on Twitter</div>
						</div>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>

					<div class="spacer"></div>

					<div class="content">
						<div class="feature-pointer pointer-a">
							<div class="label">Share this Article</div>
						</div>
						<h2><span class="awesome-icon icon-share-alt"></span> Via An Email</h2>
						<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
						<form>
							<input class="email-textbox" type="text" name="email">
							<a href="#" class="share-button">
								<img border="0" src="<?php echo image_url(); ?>/share-button_1024.png">
							</a>
						</form>
						<h2><span class="awesome-icon icon-file"></span> Via PDF</h2>
						<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
						<a href="#" class="download-pdf-button">
							<img border="0" src="<?php echo image_url(); ?>/download-pdf-button_1024.png">
						</a>
					</div>

			</div>

<?php get_footer() ?>