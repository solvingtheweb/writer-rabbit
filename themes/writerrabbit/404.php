<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<h1><?php _e( 'Page Not Found', 'starkers' ); ?></h1>
		<p><?php _e( "Apologies, but it seems you've wandered down the wrong rabbit hole. Perhaps searching will help?", 'starkers' ); ?></p>
		<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>