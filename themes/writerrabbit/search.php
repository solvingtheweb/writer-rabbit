<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div id="main" class="left">
<?php if ( have_posts() ) : ?>
		<h1><?php printf( __( 'Search Results for: %s', 'starkers' ), '' . get_search_query() . '' ); ?></h1>
			<?php
				get_template_part( 'loop', 'search' );
			?>
<?php else : ?>
		<h2><?php _e( 'Nothing Found', 'starkers' ); ?></h2>
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'starkers' ); ?></p>
			<?php get_search_form(); ?>
<?php endif; ?>
</div><!-- end #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>