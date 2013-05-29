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
			<?php $pageID = $post->ID;

			$args1 = array(
				'parent' => '0',
				'exclude' => '8',
				'sort_column' => 'menu_order'
			);		

			$chapters = get_pages($args1); ?>

			<?php foreach($chapters as $chapter) :
				$chapterID = $chapter->ID;
				
				$thumbnail = get_field("page_heading_image_mobile", $chapterID);
				$thumbnailUrl = $thumbnail['url']; ?>

				<li id="<?php echo $chapterID;?>" class="menu-item <?php if($chapterID == $pageID) echo "menu-item-open chapter-open";?>">
					<div class="menu-chapter-animate">
						<div class="menu-thumbnail" style="background-image:url('<?php echo $thumbnailUrl; ?>')"></div>
						<a class="menu-title" title="<?php echo $chapter->post_title; ?>" href="<?php echo $chapter->guid; ?>"><?php echo $chapter->post_title; ?></a>
					</div>
					
					<ul class="article-list <?php if($chapterID == $pageID) echo "articles-open";?>">
						<li><a title="<?php echo $chapter->post_title; ?>" href="<?php echo $chapter->guid; ?>">Introduction</a></li>

						<?php $args2 = array(
							'child_of' => $chapterID,
							'parent' => $chapterID,
							'title_li' => '',
							'hierarchical' => 0
						);

						$articles = get_pages($args2);

						if(count($articles) != 0) {

							foreach($articles as $article) :
								get_post_meta( $chapterID, '_wp_page_template', true ) == 'template.introduction-page.php' ? $url = $chapter->guid : $url = $article->guid; ?>

								<li><a title="<?php echo $article->post_title;?>" href="<?php echo $url; ?>"><?php echo $article->post_title;?></a></li>
							<?php endforeach;
						} ?>
					</ul>
				</li> 
			<?php endforeach; ?>
			</ul>
		</nav>
		<a class="button-b download-full-pdf-button" href="" title="()"><span class="arrow">r</span><span class="label">Download Full PDF</span></a>
	</div><!-- end div.menu-content -->
</div><!-- end div.menu -->