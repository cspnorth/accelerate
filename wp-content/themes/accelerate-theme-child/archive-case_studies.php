<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = "full"; 
			?>

			<article class="case-study">
				<div class="case-study-row">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h4>
						<h5><span><?php echo $services; ?></span></h5>
						<?php the_content(); ?>
						<p><a href="<?php the_permalink(); ?>">View project &raquo;</a></p>
					</aside>
					<div class="case-study-images">
						<?php if($image_1) {
							echo wp_get_attachment_image($image_1, $size );
						} ?>
					</div>
				</div>	
			</article>

			<?php endwhile; // end of the loop. ?>
		
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
