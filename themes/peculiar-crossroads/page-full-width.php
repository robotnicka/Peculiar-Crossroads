<?php
/**
 * Template Name: Full Width Page
 *
 * @package peculiar-crossroads
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-main--full">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
