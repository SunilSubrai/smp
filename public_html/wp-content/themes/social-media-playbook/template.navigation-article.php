<?php
/*
Template Name: Navigation Article (Template 2)
*/		
?>
<?php get_header() ?>
		<?php include "includes/include.menu.php"; ?>

		<div class="chapter-header" id="header-container">
			<?php include "includes/include.chapter-message.php" ?>
			
		</div>

		<div class="two-column one-two">


			<div class="column-one">

				<div class="content">

					<div class="the-social-media-playbook-pointer">
						<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png" />
					</div>

					<?php echo apply_filters("the_content", $post->post_content); ?>

				</div>

			</div>

			<div class="column-two">


				<div class="content">

					<div class="chapters-pointer">
						<img src="<?php echo image_url(); ?>/articles-pointer_1024.png" />
					</div>

				<div class="chapters-block">	

				<?php foreach(get_pages("sort_column=menu_order&exclude=5&hierarchical=0&parent=$post->ID") as $chapter) : ?>
					<div class="chapter">
						<div class="thumb">
							<div class="new">
								<img src="<?php echo image_url(); ?>/new-label_1024.png" />
							</div>
							<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg" />
						</div>
						<div class="description">
							<h3><a href="#"><?php echo $chapter->post_title; ?></a></h3>
							<p>
								<?php echo $chapter->post_excerpt ?>
							</p>
						</div>
						<a class="read-button" href="<?php echo get_permalink($chapter->ID); ?>">
							<img src="<?php echo image_url(); ?>/read-button_1024.png" border="0" />
							</a>
						</a>
						<div class="line"></div>
					</div>
				<?php endforeach; ?>

				</div>

			</div>

				</div>

		</div>

<?php get_footer() ?>