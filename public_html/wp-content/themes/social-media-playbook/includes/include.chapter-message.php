			<div id="chapter-message">
				<?php 
					//assuming we are using chapter where it breaks at `:`
					$x = explode(":", $post->post_title);
				?>
				<h2><?php echo trim($x[0]); ?>:</h2>
				<h1><?php echo trim($x[1]); ?></h1>
				<?php
					$pdf = (object) return_pdf();
				?>
				<a id="download-full-pdf-button" href="<?php echo $pdf->url ?>" title="Download Full PDF (<?php echo $pdf->title; ?>)"><img src="<?php echo image_url(); ?>/download-full-pdf-button_1024.png" border="0" /></a>
			</div>

			<?php
                $responsive = new responsive_meta();
                $header_image = $responsive->return_images("page_heading_image");
                
            ?>
            <img id="desktop-welcome-image" src="<?php echo $header_image->big ?>" border="0" />
            <img id="mobile-welcome-image" src="<?php echo $header_image->mobile ?>" border="0" />