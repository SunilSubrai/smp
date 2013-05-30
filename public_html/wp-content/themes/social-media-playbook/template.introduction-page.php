<?php
/*
Template Name: Introduction Page 
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





			<?php 
				$x =  0;
				$articles = get_pages("child_of=$post->ID&sort_column=menu_order");
				foreach($articles as $article) : $x++;
			?>
				<div class="content">
					<div class="chapters-pointer pointer-b">
						<div class="label"><?php echo $article->post_title; ?></div>
					</div>
					<div class="sections">
						<div class="section">
							<?php echo apply_filters("the_content", $article->post_content); ?>
						</div>
						<?php if($x == count($articles)) : ?>
							<?php 
								$chapterID = next_chapter_page(); 
							?>
							<div class="right-arrow"><P><a href="<?php echo get_permalink( $chapterID ); ?>">Next Article</a> <span class="arrow">r</span></P></div>
						<?php endif; ?>
					</div>

				<?php if($x == count($articles)) : ?>
					
				</div>
				<?php else : ?>

				</div>
				<div class="spacer"></div>
				<?php endif; ?>


			<?php endforeach; ?>
			</div>
		</div>
<?php get_footer() ?>