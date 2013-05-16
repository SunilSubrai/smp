<?php
/*
Template Name: Single Post
*/		
?>
<?php get_header() ?>
		<div id="menu-container">
			<a id="menu-button" href="#" title="menu">
			</a>
			<div id="menu-instructions"><?php echo strip_tags(get_post(26)->post_content, "<a>"); ?></div>
		</div>
		
		<div id="header-container">
			<div id="article-message">
				<?php
					$x = get_post($post->post_parent)->post_title;
					$x = explode(":", $x);
					$x = trim($x[0]);
					$chapter = $x;
				?>
				<h2><?php echo $chapter ?></h2>
				<h1><?php echo $post->post_title ?></h1>
			</div>

			<div id="article-image">
				<img src="<?php echo image_url(); ?>/article-header-image-1_1024.png" />
			</div>

		</div>

 		<div class="two-column two-one">

			<div class="column-one">

					<div class="content">
						<div class="title-pointer pointer">
							<div class="label">P.O.S.T</div>
							<img src="<?php echo image_url(); ?>/chapters-pointer_1024.png" />
						</div>

						<div class="sections">

							<div class="section">
								<h2>Lorem ipsum dolor</h2>

								<P class="intro-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </P>

								<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </P>

								<h4>P is People</h4>

								<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>

								<ul>
									<li><span>lorem ipsum 1</span></li>
									<li><span>lorem ipsum 2</span></li>
								</ul>

								<div class="line"></div>
							</div>

							<div class="section">
								<span class="awesome-icon icon-quote-left"></span>
									<blockquote cite="http://www.worldwildlife.org/who/index.html">
									For 50 years, WWF has been protecting the future of nature. The world’s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
									</blockquote>
								<span class="awesome-icon icon-quote-right"></span>
								<div class="line"></div>
							</div>

						</div>

						<div class="article-arrows">

							<div class="left-arrow"><span class="arrow">l</span> <a href="#">Previous Article</a></div>

							<div class="right-arrow"><a href="#">Next Article</a> <span class="arrow">r</span></div>

						</div>
						
					</div>

					<div class="spacer"></div>

					<div class="content">
						<div class="feature-pointer pointer">
							<div class="label">More Articles Like This</div>
							<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png">
						</div>

						<div class="articles-block more-articles">

							<div class="article">
								<div class="thumb">
									<div class="new">
										<img src="<?php echo image_url(); ?>/new-label_1024.png">
									</div>
									<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg">
								</div>
								<div class="description">
									<h3><a href="#">article one title</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
								</div>
								<a href="#" class="read-button">
									<img border="0" src="<?php echo image_url(); ?>/read-button_1024.png">
									</a>
								
								<div class="line"></div>
							</div>

							<div class="article">
								<div class="thumb">
									<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg">
								</div>
								<div class="description">
									<h3><a href="#">article two title</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
								</div>
								<a href="#" class="read-button">
									<img border="0" src="<?php echo image_url(); ?>/read-button_1024.png">
									</a>
								
								<div class="line"></div>
							</div>

							<div class="article last">
								<div class="thumb">
									<img src="<?php echo image_url(); ?>/thumb-placeholder.jpg">
								</div>
								<div class="description">
									<h3><a href="#">article two title</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
								</div>
								<a href="#" class="read-button">
									<img border="0" src="<?php echo image_url(); ?>/read-button_1024.png">
									</a>
								
								<div class="line"></div>
							</div>

						</div>
					</div>

			</div>

			<div class="column-two">

					<div class="content">
						<div class="feature-pointer pointer">
							<div class="label">@Accenture on Twitter</div>
							<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png">
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
						<div class="feature-pointer pointer">
							<div class="label">Share this Article</div>
							<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png">
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