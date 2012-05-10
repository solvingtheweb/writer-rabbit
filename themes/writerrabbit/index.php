<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
<div id="main" class="left">
	<?php if (have_posts()) : ?>
		<div id="featuredPosts">
		<?php // Loop 1 - Featured Articles
			$first_query = new WP_Query('cat=3&showposts=2');
			while($first_query->have_posts()) : $first_query->the_post(); ?>
				<div class="featured-post left" id="post-<?php the_ID(); ?>">
					<?php if (get_comments_number() > 0) : ?>
					<div class="comment-count left">
							<?php comments_popup_link('','1', '%'); ?>
					</div>
					<?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="excerpt-thumbnail">'; the_post_thumbnail('thumbnail'); echo '</div>'; } ?></a>
					<p><?php the_excerpt(); ?></p>
					<p class="tags"><?php the_tags('posted in ', ', ', '<br />'); ?></p>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- End #featuredPosts -->

		<div id="secondaryPosts" class="clearboth">
		<?php // Loop 2 - More Articles
			$second_query = new WP_Query('cat=-3&showposts=3');
			while($second_query->have_posts()) : $second_query->the_post(); ?>
				<div class="secondary-post left" id="post-<?php the_ID(); ?>">
					<?php if (get_comments_number() > 0) : ?>
					<div class="comment-count left">
							<?php comments_popup_link('','1', '%'); ?>
					</div>
					<?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="excerpt-thumbnail">'; the_post_thumbnail('thumbnail'); echo '</div>'; } ?></a>

					<p><?php the_excerpt(); ?></p>
					<p class="tags"><?php the_tags('posted in ', ', ', '<br />'); ?></p>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- End #secondaryPosts -->

	<?php else : ?>
		<h2>Nothing Found</h2>
	<?php endif; ?>
	<div id="tertiaryContent" class="clearboth">
		<div id="categoryList" class="left">
			<?php wp_list_categories( 'title_li=<h3>' . __('Categories') . '</h3>'  ); ?>
		</div>
		<div id="quickPosts" class="left">
			<h3>Thinkings Around & About the Web</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'quickpost', 'posts_per_page' => 3 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="quick-post">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
		</div>
	</div><!-- End #tertiaryContent -->

</div><!-- End #main -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>