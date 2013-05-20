<?php
/*
Template Name: Introduction Page 
*/
?>
<?php get_header() ?> 
	<?php include "includes/include.menu.php"; ?>
	<div class="chapter-header" id="header-container">
		
		<?php include "includes/include.chapter-message.php" ?>

		<?php
			$responsive = new responsive_meta();
			$header_image = $responsive->return_images("page_heading_image");
		?>
		<img id="desktop-welcome-image" src="<?php echo $header_image->big ?>" border="0" />
		<img id="mobile-welcome-image" src="<?php echo $header_image->mobile ?>" border="0" />
	</div>
	<div class="two-column one-two">
		<div class="column-one">
			<div class="content">
				<div class="the-social-media-playbook-pointer pointer">
					<div class="label">Introduction</div>
					<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png" />
				</div>

				<?php echo apply_filters("the_content", $post->post_content); ?>
			
			</div>
		</div>
		<div class="column-two">
			<?php 
				$x =  0;
				$articles = get_pages("child_of=$post->ID&sort_column=menu_order");
				foreach($articles as $article) : $x++;
			?>
				<div class="content">
					<div class="chapters-pointer pointer">
						<div class="label"><?php echo $article->post_title ?></div>
						<img src="<?php echo image_url(); ?>/chapters-pointer_1024.png" border="0" />
					</div>
					<div class="sections">
						<div class="section">
							<?php echo apply_filters("the_content", $article->post_content); ?>
						</div>
					</div>

				<?php if($x == count($articles)) : ?>
					<div class="right-arrow"><a href="#">Next Article</a><span class="arrow">r</span></div>
					</div>
				<?php else : ?>
					</div>
					<div class="spacer"></div>
				<?php endif; ?>
			<?php endforeach; ?>
			</div>
		</div>
<?php get_footer() ?>