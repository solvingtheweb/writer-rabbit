<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer class="clearboth">

<?php
	get_sidebar( 'footer' );
?>

		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
		</a>

	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div><!-- End #innerWrapper -->
</div><!-- End #wrapper -->

</body>
</html>