<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<p> os tjos wprlogn</p>
	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<h4>Is this page working?</h4>
			<?php while ( have_posts() ) : the_post(); ?>
			<p>is this working</p>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
