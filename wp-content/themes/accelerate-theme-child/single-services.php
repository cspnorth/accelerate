<?php
/**
 * The template for services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content service-type">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			$service_icon = get_field('service_icon');
			$size = "full";
			?>
			<article class="services">
				<div class="service-icon">
					<?php if($service_icon) {
						echo wp_get_attachment_image($service_icon, $size );
						} ?>
				</div>
				<aside class="service-description">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</aside>
			</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
