<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
    <!--<?php get_template_part( 'loop', 'index' ); ?>-->
    <!--<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<p><?php comments_popup_link('No Comments;',
				'1 Comment', '% Comments'); ?></p>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php echo get_post_meta($post->ID, 'PostThumb',
				true); ?>
				<?php the_content('Read Full Article'); ?>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', '); ?></p>
			</div>

		<?php endwhile; ?>
		<?php next_posts_link('Older Entries'); ?>
		<?php previous_posts_link('Newer Entries'); ?>
	<?php else : ?>
		<h2>Nothing Found</h2>
	<?php endif; ?>-->

	<?php if (have_posts()) : ?>
		<?php // Loop 1 - Featured Articles
			$first_query = new WP_Query('cat=6&showposts=2');
			while($first_query->have_posts()) : $first_query->the_post(); ?>
				<div class="featured_post" id="post-<?php the_ID(); ?>">
					<p><?php comments_popup_link('',
					'1', '%'); ?></p>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="excerpt-thumbnail">'; the_post_thumbnail('thumbnail'); echo '</div>'; } ?></a>
					<p><?php the_excerpt(); ?></p>
					<p><?php the_tags('posted in ', ', ', '<br />'); ?></p>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php // Loop 2 - More Articles
			$second_query = new WP_Query('cat=-6,-5&showposts=3');
			while($second_query->have_posts()) : $second_query->the_post(); ?>
				<div class="secondary_post" id="post-<?php the_ID(); ?>">
					<p><?php comments_popup_link('',
					'1', '%'); ?></p>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="excerpt-thumbnail">'; the_post_thumbnail('thumbnail'); echo '</div>'; } ?></a>

					<p><?php the_excerpt(); ?></p>
					<p><?php the_tags('posted in ', ', ', '<br />'); ?></p>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<h2>Nothing Found</h2>
	<?php endif; ?>

	<?php wp_list_categories( $args ); ?>

	<?php $loop = new WP_Query( array( 'post_type' => 'quickpost', 'posts_per_page' => 3 ) ); ?>

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>