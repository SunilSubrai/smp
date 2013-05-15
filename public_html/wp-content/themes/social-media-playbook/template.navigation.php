<?php
/*
Template Name: Navigation (Template 1)
*/		
?>
<?php get_header() ?>

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
						<img src="<?php echo image_url(); ?>/chapters-pointer_1024.png" />
					</div>

				<div class="chapters-block">

				<?php foreach(get_pages("sort_column=menu_order&exclude=5") as $chapter) : ?>
					<div class="chapter">
						<div class="thumb">
							<div class="new">
								<img src="<?php echo image_url(); ?>/new-label_1024.png" />
							</div>
							<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg" />
						</div>
						<div class="description">
							<h3><a href="#"><?php echo $chapter->post_title ?></a></h3>
							<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</P>
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