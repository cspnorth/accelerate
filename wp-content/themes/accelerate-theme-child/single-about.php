<?php
/**
 * The template for displaying case studies 
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				
				$services = get_field('services');
				$icon = get_field('icon');
				<article class="services">
					
						<h2><?php the_title(); ?></h2>
					
						<?php the_content(); ?>

					
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
<div id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to work</span></a></div>
</div>

<?php get_footer(); ?>
