<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<aside>
		<ul>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li>
				<?php get_search_form(); ?>
			</li>

			<li>
				<h3><?php _e( 'Archives', 'starkers' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Meta', 'starkers' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
		</ul>


<?php 
	/* Quote of the Day */
	$loop = new WP_Query( array( 'post_type' => 'quote', 'posts_per_page' => 1 ) ); ?>
		<h3>Quips & Quotes</h3>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
<?php endwhile; ?>

<?php 
	/* Prompt */
	$loop = new WP_Query( array( 'post_type' => 'prompt', 'posts_per_page' => 1 ) ); ?>
		<h3>Prompt</h3>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
<?php endwhile; ?>


<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul>
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>
	
	</aside>