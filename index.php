<?php get_header(); ?>

			<div id="wrapper">
			<div id="content">
				<h2 class="title node-full"></h2>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<div class="node" id="post-<?php the_ID(); ?>">
					<div <?php post_class() ?>>
						<h2 class="title">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<span class="submitted">submitted by <?php the_author() ?> on <?php the_time('F jS, Y') ?> </span>
						<div class="entry"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
						<div class="clear-block clear">
							<div class="meta">
								<div class="links">
									<ul class="links">
										<li>categories: <?php the_category(', ') ?></li> | 
										<li><?php the_tags('tags: ', ', ', ' | '); ?></li>
										<li><?php comments_popup_link('no comments', '1 comment', '% comments'); ?></li>
									</ul>
								</div>
							</div>
							
						</div>
					    
					</div> <!-- post class wrapper -->
					<div class="cleardiv"></div>
					</div> <!-- node -->
					
				<?php endwhile; ?>

			<?php else : ?>

					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>

			<?php endif; ?>
			
			</div> <!-- content -->
			</div> <!-- wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
