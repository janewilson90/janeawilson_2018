<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package janeawilson_2018
 */

?>

	</div><!-- #content -->

	<footer class="site-footer row" id="colophon">
		<div class="container">
			<section class="col-4">
				<h3>Location</h3>
				<p>Dundee, Scotland</p>
			</section>

			<section class="col-4">
				<h3>Around the web</h3>
			</section>

			<section class="col-4">
				<h3>Site Info</h3>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'janeawilson_2018' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'janeawilson_2018' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'janeawilson_2018' ), 'janeawilson_2018', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
			</section>
		</div>
		
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
