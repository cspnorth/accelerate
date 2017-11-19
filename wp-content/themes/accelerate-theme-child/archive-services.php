<?php
/**
 * The template for displaying the homepage
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

	<div id="primary" class="home-page hero-text">
		
		<div class="main-content" role="main">
			<h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
		</div><!-- .main-content -->
	</div><!-- #primary -->
	<div class="page-width">

		<div class="services-intro">
			<h4>OUR SERVICES</h4>
			<p>We take pride in our clients and the content we create for them.<br />
			Here’s a brief overview of our offered services.
		</div>

		<div class="flex-column"
			<?php while ( have_posts() ) : the_post();
				$service_icon = get_field( 'service_icon');
				$size = "full";
				?>
				<article class="individual-services">
					<div class='<?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>'>
						<div class="service-image">
							<?php if($service_icon) {
									echo wp_get_attachment_image($service_icon, $size);
								} 
							?>
						</div>
						<div class="service-copy">
							<h2><?php the_title(); ?></h2
							<?php the_content(); ?>
						
					</div>
				</article><!-- end of article -->
			<?php endwhile; // end of the loop. ?>
		</div> <!-- end of flex column -->
		<div class="services-cta oddpost">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
		
	</div><!-- end of page width class -->



<?php get_footer(); ?>
