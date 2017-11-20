<?php
/**
 * The template for displaying the 404 error page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

	<div id="primary" class="main-content page-width error-page">
		<h1>Nooooooooo!!!! 404</h1>

		
			<div class="error-body flex-container">
				<div class="error-copy">
					<h2>I told you not to do that!
					<br />Now we'll never find it.
					<br />It's lost forever!</h2>
					<h2/>Might as well go home.</h2>
				</div>
				<div class="error-image">
					<img src="http://localhost:8888/accelerate/wp-content/themes/accelerate-theme-child/img/404-image1.png" />
				</div>
			</div>
			<div class="error-button">
	<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go Home</a>
</div>


	</div><!-- #primary -->

<?php get_footer(); ?>
