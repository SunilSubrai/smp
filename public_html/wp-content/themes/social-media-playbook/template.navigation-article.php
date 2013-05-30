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

					<div class="the-social-media-playbook-pointer pointer-a">
						<div class="label"><?php echo $post->left_hand_box_heading ?></div>
					</div>

					<?php echo apply_filters("the_content", $post->introduction_text_area); ?>

				</div>

			</div>

			<div class="column-two">

				<?php if($post->right_hand_intro_box_heading) : ?>

					<div class="content">

						<div class="chapters-pointer pointer-a">
							<div class="label"><?php echo $post->right_hand_intro_box_heading ?></div>
						</div>

						<?php echo apply_filters("the_content", $post->post_content); ?>
					
					</div>

					<div class="spacer"></div> 

				<?php endif; ?>

				<div class="content">

					<div class="chapters-pointer pointer-b">
						<div class="label">Articles</div>
					</div>

				<div class="chapters-block">	

				<?php foreach(get_pages("sort_column=menu_order&exclude=5&hierarchical=0&parent=$post->ID") as $chapter) : ?>
					<?php 
					$chapterID = $chapter->ID;
					$thumbnail = get_field("post_heading", $chapterID);
					$thumbnailUrl = $thumbnail['url']; 
					?>
					<div class="chapter">
						<a href="<?php echo get_permalink($chapter->ID); ?>"><div class="thumb">
							<div class="new">
								<img src="<?php echo image_url(); ?>/new-label_1024.png" />
							</div>
							<div class="thumbnail" style="background-image:url('<?php echo $thumbnailUrl; ?>')"></div>
						</div>
						</a>
						<div class="description">
							<h3><a href="<?php echo get_permalink($chapter->ID); ?>"><?php echo $chapter->post_title; ?></a></h3>
							<p>
								<?php echo $chapter->post_excerpt ?>
							</p>
						</div>
						<a class="button-a read-button" href="<?php echo get_permalink($chapter->ID); ?>">
							<span class="arrow">r</span><span class="label">Read</span>
						</a>
						<div class="line"></div>
					</div>
				<?php endforeach; ?>

				</div>

			</div>

				</div>

		</div>

<?php get_footer() ?>