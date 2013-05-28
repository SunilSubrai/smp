<?php
/*
Template Name: One Column Tabbed
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

 		<div class="one-column">

			<div class="row">

					<div class="content">
						<div class="title-pointer pointer-a">
							<div class="label"><?php echo $post->post_title; ?></div>
						</div>

						<div class="sections">
							<?php echo apply_filters("the_content", $post->post_content); ?>
						</div>
						
					</div>

					<div class="spacer"></div>

			</div>

			<div class="row">
				<div class="tabbed-content">

					<?php 
						$limit = 6;
						$x =  0;
						$tabs = get_pages("sort_column=menu_order&exclude=5&hierarchical=0&parent=$post->ID") 
					?>
					<?php 
						foreach( $tabs as $tab) : $x++; 
					?>

						<div class="content">
							<div class="title-pointer pointer-b">
								<div class="label"><?php echo $tab->post_title; ?></div>
							</div>
							<div class="sections">
								<div class="section">
									<?php echo apply_filters("the_content", $tab->post_content); ?>	
									<div class="line"></div>
								</div>
							</div>
						</div> 

					<?php
						if($x == $limit) { 
	       					break; 
	    				}
	    			?>

					<?php endforeach; ?> 

				</div>
			</div>

			<div class="spacer"></div>

			<div class="row narrower">

				<?php include "includes/include.article-include.php"; ?>

			</div>

			<div class="spacer"></div>

			<div class="row narrower">

				<div class="content">

						<div class="feature-pointer pointer-a">
							<div class="label">Share this Article</div>
						</div>

					<div class="share-via-block">
						<h2><span class="awesome-icon icon-share-alt"></span> Via An Email</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<form>
							<input class="email-textbox" type="text" name="email" placeholder="Enter email address">
							<a href="#" class="button-a read-button">
								<span class="arrow">r</span> <span class="label">Share</span>
							</a>
						</form>
					</div>

					<div class="share-via-block last">
						<h2><span class="awesome-icon icon-file"></span> Via PDF</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="button-a read-button">
							<span class="arrow">r</span> <span class="label">Download PDF</span>
						</a>
					</div>

				</div>
			</div>

		</div>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			tabber.init();
		});
	</script>

<?php get_footer() ?>