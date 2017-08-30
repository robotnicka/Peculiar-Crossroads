<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package peculiar-crossroads
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'peculiar-crossroads' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h2><?php esc_html_e( 'Ph&#8217;nglui mglw&#8217;nafh Cthulhu R&#8217;lyeh wgah&#8217;nagl fhtagn.', 'peculiar-crossroads' ); ?></h2>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
