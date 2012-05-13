<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div id="main" class="left">
		<h1><?php
			printf( __( 'Tag Archives: %s', 'starkers' ), '' . single_tag_title( '', false ) . '' );
		?></h1>

<?php
 get_template_part( 'loop', 'tag' );
?>

</div><!-- end #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>