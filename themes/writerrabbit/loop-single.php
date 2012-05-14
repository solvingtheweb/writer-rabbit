<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<div id="main" class="left">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php if ( has_post_thumbnail() ) { /* loads the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
			
			<?php the_category(); ?>

			<?php if (get_comments_number() > 0) : ?>
					<div class="comment-count left">
							<?php comments_popup_link('','1', '%'); ?>
					</div>
			<?php endif; ?>

			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			
			<?php the_content(); ?>

			<?php get_ssb($order = array('googleplus' => 3, 'fblike' => 1, 'twitter' => 2)); ?>

			<div class="clearboth"></div>
		</article>


		<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
</div><!-- end #main -->