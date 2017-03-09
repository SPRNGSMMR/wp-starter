<article id="post-<?php the_ID(); ?>" class="large-4 medium-4 small-12 columns" role="article">
						<header class="article-header">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p class="byline">
								von <?php the_author_posts_link(); ?>, <?php the_time('j. F Y') ?> <?php //the_category(', ') ?>
							</p>	
						</header>										
						<section class="entry-content listing" itemprop="articleBody">							
							<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
						</section>			
						<footer class="article-footer">
							<a href="<?php the_permalink() ?>" class="readmore">WEITERLESEN</a>
					    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
						</footer>
					</article>