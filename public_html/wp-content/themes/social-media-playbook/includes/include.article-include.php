					<div class="content">
						<div class="feature-pointer pointer">
							<div class="label">More Articles Like This</div>
							<img src="<?php echo image_url(); ?>/the-social-media-playbook-pointer_1024.png">
						</div>

						<div class="articles-block more-articles">

							<?php 
								$parent 	= $post->post_parent;
								$articles 	= get_pages('child_of=18');
								$i 			= 0;
								$last 		= false;

								foreach($articles as $article) : 
									$i++; 

									//since number dosen't work for some reason
									if($i > 3) break;
									if($post->ID != $article->ID) {

										if(count($articles) == $i) 
											$last = true;
							?>
										<div class="article<?php if($last) echo ' last' ?>">
											<div class="thumb">
												<div class="new">
													<img src="<?php echo image_url(); ?>/new-label_1024.png">
												</div>
												<?php
													$x 		= get_field( "post_heading", $article->ID );
													$url 	= $x["url"];
													$alt  	= $x["alt"];
												?>
												<img src="<?php echo $url; ?>" alt="<?php echo $alt ?>" />
											</div>
											<div class="description">
												<h3><a href="<?php echo get_permalink($article->ID) ?>"><?php echo $article->post_title ?></a></h3>
												<p><?php echo $article->post_excerpt ?></p>
											</div>
											<a href="<?php echo get_permalink($article->ID) ?>" class="read-button">
												<img border="0" src="<?php echo image_url(); ?>/read-button_1024.png">
											</a>
											
											<div class="line"></div>
										</div>
									<?php } ?>
								<?php endforeach; ?>

						</div>
					</div>