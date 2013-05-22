<?php
/*
Template Name: Navigation (Template 1)
*/		
?>
<?php get_header() ?>
		<?php include "includes/include.menu.php"; ?>

		<div id="header-container">
			<div id="welcome-message">
				<h1><?php echo strip_tags(get_post(28)->post_content, "<h1><br>"); ?></h1>
				<?php
					$pdf = (object) return_pdf();
				?>
				<!-- <a id="download-full-pdf-button" href="<?php echo $pdf->url ?>" title="Download Full PDF (<?php echo $pdf->title; ?>)"><img src="<?php echo image_url(); ?>/download-full-pdf-button_1024.png" border="0" /></a> -->
				<a class="button-b download-full-pdf-button" href="<?php echo $pdf->url ?>" title="(<?php echo $pdf->title; ?>)"><span class="arrow">r</span><span class="label">Download Full PDF</span></a>
			</div>
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

					<div class="the-social-media-playbook-pointer pointer-a">
						<div class="label">The Social Media Playbook</div>
					</div>

					<?php echo apply_filters("the_content", $post->post_content); ?>

				</div>

			</div>

			<div class="column-two">


				<div class="content">

					<div class="chapters-pointer pointer-b">
						<div class="label">Chapters</div>
					</div>

				<div class="chapters-block">

				<?php foreach(get_pages("sort_column=menu_order&exclude=8&hierarchical=0&parent=0") as $chapter) : ?>
					<div class="chapter">
						<a href="<?php echo get_permalink($chapter->ID); ?>"><div class="thumb">
							<div class="new">
								<img src="<?php echo image_url(); ?>/new-label_1024.png" />
							</div>
							<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg" />
						</div></a>
						<div class="description">
							<h3><a href="<?php echo get_permalink($chapter->ID); ?>"><?php $x = explode(":", $chapter->post_title); echo trim($x[1]); ?></a></h3>
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